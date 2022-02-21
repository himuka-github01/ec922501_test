<?php

/*
 * This file is part of EC-CUBE
 *
 * Copyright(c) EC-CUBE CO.,LTD. All Rights Reserved.
 *
 * http://www.ec-cube.co.jp/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

//namespace Eccube\Controller;
namespace Customize\Controller;

use Eccube\Controller\NonMemberShoppingController as BaseNMSController;   // 元のコントローラ

use Eccube\Entity\Customer;
use Eccube\Event\EccubeEvents;
use Eccube\Event\EventArgs;
use Eccube\Form\Type\Front\NonMemberType;
use Eccube\Form\Validator\Email;
use Eccube\Repository\Master\PrefRepository;
use Eccube\Service\CartService;
use Eccube\Service\OrderHelper;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class NonMemberShoppingController extends BaseNMSController
{
    /**
     * 非会員処理
     *
     * @Route("/shopping/nonmember", name="shopping_nonmember")
     * @Template("Shopping/nonmember.twig")
     */
    public function index(Request $request)
    {
        // ログイン済みの場合は, 購入画面へリダイレクト.
        if ($this->isGranted('ROLE_USER')) {
            return $this->redirectToRoute('shopping');
        }

        // カートチェック.
        $Cart = $this->cartService->getCart();
        if (!($Cart && $this->orderHelper->verifyCart($Cart))) {
            return $this->redirectToRoute('cart');
        }

        $builder = $this->formFactory->createBuilder(NonMemberType::class);

        $event = new EventArgs(
            [
                'builder' => $builder,
            ],
            $request
        );
        $this->eventDispatcher->dispatch(EccubeEvents::FRONT_SHOPPING_NONMEMBER_INITIALIZE, $event);

        $form = $builder->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            log_info('非会員お客様情報登録開始');

            $data = $form->getData();
            $data['name01'] = $data['kana01'];
            $data['name02'] = $data['kana02'];
            $Customer = new Customer();
            $Customer
                ->setName01($data['name01'])
                ->setName02($data['name02'])
                ->setKana01($data['kana01'])
                ->setKana02($data['kana02'])
                ->setCompanyName($data['company_name'])
                ->setEmail($data['email'])
                ->setPhonenumber($data['phone_number'])
                ->setPostalcode($data['postal_code'])
                ->setPref($data['pref'])
                ->setAddr01($data['addr01'])
                ->setAddr02($data['addr02'])
                ->setShainFlg($data['shain_flg'])
                ->setShoukaiName($data['shoukai_name'])
                ->setUketsukeName($data['uketsuke_name']);

            // 非会員用セッションを作成
            $this->session->set(OrderHelper::SESSION_NON_MEMBER, $Customer);
            $this->session->set(OrderHelper::SESSION_NON_MEMBER_ADDRESSES, serialize([]));

            $event = new EventArgs(
                [
                    'form' => $form,
                ],
                $request
            );
            $this->eventDispatcher->dispatch(EccubeEvents::FRONT_SHOPPING_NONMEMBER_COMPLETE, $event);

            if ($event->getResponse() !== null) {
                return $event->getResponse();
            }

            log_info('非会員お客様情報登録完了');

            return $this->redirectToRoute('shopping');
        }

        return [
            'form' => $form->createView(),
        ];
    }

    /**
     * お客様情報の変更(非会員)
     *
     * @Route("/shopping/customer", name="shopping_customer")
     */
    public function customer(Request $request)
    {
        log_info('Requestお客様情報');
        log_info('Request,', $request->request->all());
        if (!$request->isXmlHttpRequest()) {
            return $this->json(['status' => 'NG'], 400);
        }
        $this->isTokenValid();
        try {
            log_info('非会員お客様情報変更処理開始');
            $data = $request->request->all();
            log_info('request:',$data);
            // 入力チェック
            $errors = $this->customerValidation($data);
            foreach ($errors as $error) {
                if ($error->count() != 0) {
                    log_info('非会員お客様情報変更入力チェックエラー',(array)$error);

                    return $this->json(['status' => 'NG'], 400);
                }
            }
            $pref = $this->prefRepository->findOneBy(['name' => $data['customer_pref']]);
            if (!$pref) {
                log_info('非会員お客様情報変更入力チェックエラー');

                return $this->json(['status' => 'NG'], 400);
            }
            $preOrderId = $this->cartService->getPreOrderId();
            $Order = $this->orderHelper->getPurchaseProcessingOrder($preOrderId);
            if (!$Order) {
                log_info('受注が存在しません');
                $this->addError('front.shopping.order_error');

                return $this->redirectToRoute('shopping_error');
            }
            $data['customer_name01'] = $data['customer_kana01'];
            $data['customer_name02'] = $data['customer_kana02'];
            $Order
                ->setName01($data['customer_name01'])
                ->setName02($data['customer_name02'])
                ->setKana01($data['customer_kana01'])
                ->setKana02($data['customer_kana02'])
                ->setCompanyName($data['customer_company_name'])
                ->setPhoneNumber($data['customer_phone_number'])
                ->setPostalCode($data['customer_postal_code'])
                ->setPref($pref)
                ->setAddr01($data['customer_addr01'])
                ->setAddr02($data['customer_addr02'])
                ->setEmail($data['customer_email'])
                ->setShoukaiName($data['customer_shoukai_name'])
                ->setUketsukeName($data['customer_uketsuke_name'])
                ->setShainFlg($data['customer_shain_flg']);

                $this->entityManager->flush();

                // debug
                $strOrder = serialize($Order);
                log_info('Order:',[$strOrder]);

            $Customer = new Customer();
            $Customer
                ->setName01($data['customer_name01'])
                ->setName02($data['customer_name02'])
                ->setKana01($data['customer_kana01'])
                ->setKana02($data['customer_kana02'])
                ->setCompanyName($data['customer_company_name'])
                ->setPhoneNumber($data['customer_phone_number'])
                ->setPostalCode($data['customer_postal_code'])
                ->setPref($pref)
                ->setAddr01($data['customer_addr01'])
                ->setAddr02($data['customer_addr02'])
                ->setEmail($data['customer_email'])
                ->setShoukaiName($data['customer_shoukai_name'])
                ->setUketsukeName($data['customer_uketsuke_name'])
                ->setShainFlg($data['customer_shain_flg']);

            $this->session->set(OrderHelper::SESSION_NON_MEMBER, $Customer);

            $event = new EventArgs(
                [
                    'Order' => $Order,
                    'data' => $data,
                ],
                $request
            );
            $this->eventDispatcher->dispatch(EccubeEvents::FRONT_SHOPPING_CUSTOMER_INITIALIZE, $event);
            log_info('非会員お客様情報変更処理完了', [$Order->getId()]);
            $message = ['status' => 'OK', 'kana01' => $data['customer_kana01'], 'kana02' => $data['customer_kana02']];

            $response = $this->json($message);
        } catch (\Exception $e) {
            log_error('予期しないエラー', [$e->getMessage()]);

            $response = $this->json(['status' => 'NG'], 500);
        }

        return $response;
    }

    /**
     * 非会員でのお客様情報変更時の入力チェック
     *
     * @param array $data リクエストパラメータ
     *
     * @return \Symfony\Component\Validator\ConstraintViolationListInterface[]
     */
    protected function customerValidation(array &$data)
    {
        // 入力チェック
        $errors = [];

        $errors[] = $this->validator->validate(
            $data['customer_name01'],
            [
                new Assert\NotBlank(),
                new Assert\Length(['max' => $this->eccubeConfig['eccube_name_len']]),
                new Assert\Regex(['pattern' => '/^[ァ-ヶｦ-ﾟー]+$/u']),
            ]
        );

        $errors[] = $this->validator->validate(
            $data['customer_name02'],
            [
                new Assert\NotBlank(),
                new Assert\Length(['max' => $this->eccubeConfig['eccube_name_len']]),
                new Assert\Regex(['pattern' => '/^[ァ-ヶｦ-ﾟー]+$/u']),
            ]
        );

        $data['customer_kana01'] = mb_convert_kana($data['customer_kana01'], 'CV', 'utf-8');
        $errors[] = $this->validator->validate(
            $data['customer_kana01'],
            [
                new Assert\NotBlank(),
                new Assert\Length(['max' => $this->eccubeConfig['eccube_kana_len']]),
                new Assert\Regex(['pattern' => '/^[ァ-ヶｦ-ﾟー]+$/u']),
            ]
        );
        $data['customer_kana02'] = mb_convert_kana($data['customer_kana02'], 'CV', 'utf-8');
        $errors[] = $this->validator->validate(
            $data['customer_kana02'],
            [
                new Assert\NotBlank(),
                new Assert\Length(['max' => $this->eccubeConfig['eccube_kana_len']]),
                new Assert\Regex(['pattern' => '/^[ァ-ヶｦ-ﾟー]+$/u']),
            ]);
        /*
        $errors[] = $this->validator->validate(
            $data['customer_company_name'],
            [
                new Assert\Length(['max' => $this->eccubeConfig['eccube_stext_len']]),
            ]
        );
        */

        $errors[] = $this->validator->validate(
            $data['customer_phone_number'],
            [
                new Assert\NotBlank(),
                new Assert\Type(['type' => 'numeric', 'message' => 'form_error.numeric_only']),
                new Assert\Length(
                    ['max' => $this->eccubeConfig['eccube_tel_len_max']]
                ),
            ]
        );

        $errors[] = $this->validator->validate(
            $data['customer_uketsuke_name'],
            [
                new Assert\NotBlank(),
            ]
        );
        /*
        $errors[] = $this->validator->validate(
            $data['customer_postal_code'],
            [
                new Assert\NotBlank(),
                new Assert\Type(['type' => 'numeric', 'message' => 'form_error.numeric_only']),
                new Assert\Length(
                    ['max' => $this->eccubeConfig['eccube_postal_code']]
                ),
            ]
        );

        $errors[] = $this->validator->validate(
            $data['customer_addr01'],
            [
                new Assert\NotBlank(),
                new Assert\Length(['max' => $this->eccubeConfig['eccube_address1_len']]),
            ]
        );

        $errors[] = $this->validator->validate(
            $data['customer_addr02'],
            [
                new Assert\NotBlank(),
                new Assert\Length(['max' => $this->eccubeConfig['eccube_address2_len']]),
            ]
        );

        $errors[] = $this->validator->validate(
            $data['customer_email'],
            [
                new Assert\NotBlank(),
                new Email(['strict' => $this->eccubeConfig['eccube_rfc_email_check']]),
            ]
        );
        */

        return $errors;
    }
}
