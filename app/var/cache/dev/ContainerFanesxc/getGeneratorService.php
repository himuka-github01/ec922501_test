<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Eccube\Tests\Fixture\Generator' shared service.

include_once $this->targetDirs[3].'/tests/Eccube/Tests/Fixture/Generator.php';

if ($lazyLoad) {
    return $this->services['Eccube\\Tests\\Fixture\\Generator'] = $this->createProxy('Generator_4137487', function () {
        return \Generator_4137487::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
            $wrappedInstance = $this->load('getGeneratorService.php', false);

            $proxy->setProxyInitializer(null);

            return true;
        });
    });
}

return new \Eccube\Tests\Fixture\Generator(${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'}, ${($_ = isset($this->services['Eccube\\Security\\Core\\Encoder\\PasswordEncoder']) ? $this->services['Eccube\\Security\\Core\\Encoder\\PasswordEncoder'] : $this->load('getPasswordEncoderService.php')) && false ?: '_'}, ${($_ = isset($this->services['Eccube\\Repository\\MemberRepository']) ? $this->services['Eccube\\Repository\\MemberRepository'] : $this->load('getMemberRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['Customize\\Repository\\CategoryRepository']) ? $this->services['Customize\\Repository\\CategoryRepository'] : $this->load('getCategoryRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['Eccube\\Repository\\CustomerRepository']) ? $this->services['Eccube\\Repository\\CustomerRepository'] : $this->load('getCustomerRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['Eccube\\Repository\\ClassNameRepository']) ? $this->services['Eccube\\Repository\\ClassNameRepository'] : $this->load('getClassNameRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['Eccube\\Repository\\ClassCategoryRepository']) ? $this->services['Eccube\\Repository\\ClassCategoryRepository'] : $this->load('getClassCategoryRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['Eccube\\Repository\\DeliveryDurationRepository']) ? $this->services['Eccube\\Repository\\DeliveryDurationRepository'] : $this->load('getDeliveryDurationRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['Eccube\\Repository\\DeliveryFeeRepository']) ? $this->services['Eccube\\Repository\\DeliveryFeeRepository'] : $this->load('getDeliveryFeeRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['Eccube\\Repository\\PaymentRepository']) ? $this->services['Eccube\\Repository\\PaymentRepository'] : $this->load('getPaymentRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['Eccube\\Repository\\PageRepository']) ? $this->services['Eccube\\Repository\\PageRepository'] : $this->getPageRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['Eccube\\Repository\\Master\\PrefRepository']) ? $this->services['Eccube\\Repository\\Master\\PrefRepository'] : $this->load('getPrefRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['Eccube\\Repository\\TaxRuleRepository']) ? $this->services['Eccube\\Repository\\TaxRuleRepository'] : $this->getTaxRuleRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['eccube.purchase.flow.order']) ? $this->services['eccube.purchase.flow.order'] : $this->load('getEccube_Purchase_Flow_OrderService.php')) && false ?: '_'}, ${($_ = isset($this->services['session']) ? $this->services['session'] : $this->getSessionService()) && false ?: '_'}, 'ja_JP');
