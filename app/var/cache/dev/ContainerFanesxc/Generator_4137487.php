<?php

class Generator_4137487 extends \Eccube\Tests\Fixture\Generator implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder4137487 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer4137487 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties4137487 = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function createMember($username = null)
    {
        $this->initializer4137487 && ($this->initializer4137487->__invoke($valueHolder4137487, $this, 'createMember', array('username' => $username), $this->initializer4137487) || 1) && $this->valueHolder4137487 = $valueHolder4137487;

        return $this->valueHolder4137487->createMember($username);
    }

    /**
     * {@inheritDoc}
     */
    public function createCustomer($email = null)
    {
        $this->initializer4137487 && ($this->initializer4137487->__invoke($valueHolder4137487, $this, 'createCustomer', array('email' => $email), $this->initializer4137487) || 1) && $this->valueHolder4137487 = $valueHolder4137487;

        return $this->valueHolder4137487->createCustomer($email);
    }

    /**
     * {@inheritDoc}
     */
    public function createCustomerAddress(\Eccube\Entity\Customer $Customer, $is_nonmember = false)
    {
        $this->initializer4137487 && ($this->initializer4137487->__invoke($valueHolder4137487, $this, 'createCustomerAddress', array('Customer' => $Customer, 'is_nonmember' => $is_nonmember), $this->initializer4137487) || 1) && $this->valueHolder4137487 = $valueHolder4137487;

        return $this->valueHolder4137487->createCustomerAddress($Customer, $is_nonmember);
    }

    /**
     * {@inheritDoc}
     */
    public function createNonMember($email = null)
    {
        $this->initializer4137487 && ($this->initializer4137487->__invoke($valueHolder4137487, $this, 'createNonMember', array('email' => $email), $this->initializer4137487) || 1) && $this->valueHolder4137487 = $valueHolder4137487;

        return $this->valueHolder4137487->createNonMember($email);
    }

    /**
     * {@inheritDoc}
     */
    public function createProduct($product_name = null, $product_class_num = 3, $image_type = null)
    {
        $this->initializer4137487 && ($this->initializer4137487->__invoke($valueHolder4137487, $this, 'createProduct', array('product_name' => $product_name, 'product_class_num' => $product_class_num, 'image_type' => $image_type), $this->initializer4137487) || 1) && $this->valueHolder4137487 = $valueHolder4137487;

        return $this->valueHolder4137487->createProduct($product_name, $product_class_num, $image_type);
    }

    /**
     * {@inheritDoc}
     */
    public function createOrder(\Eccube\Entity\Customer $Customer, array $ProductClasses = [], ?\Eccube\Entity\Delivery $Delivery = null, $add_charge = 0, $add_discount = 0, $statusTypeId = null)
    {
        $this->initializer4137487 && ($this->initializer4137487->__invoke($valueHolder4137487, $this, 'createOrder', array('Customer' => $Customer, 'ProductClasses' => $ProductClasses, 'Delivery' => $Delivery, 'add_charge' => $add_charge, 'add_discount' => $add_discount, 'statusTypeId' => $statusTypeId), $this->initializer4137487) || 1) && $this->valueHolder4137487 = $valueHolder4137487;

        return $this->valueHolder4137487->createOrder($Customer, $ProductClasses, $Delivery, $add_charge, $add_discount, $statusTypeId);
    }

    /**
     * {@inheritDoc}
     */
    public function createPayment(\Eccube\Entity\Delivery $Delivery, $method, $charge = 0, $rule_min = 0, $rule_max = 999999999)
    {
        $this->initializer4137487 && ($this->initializer4137487->__invoke($valueHolder4137487, $this, 'createPayment', array('Delivery' => $Delivery, 'method' => $method, 'charge' => $charge, 'rule_min' => $rule_min, 'rule_max' => $rule_max), $this->initializer4137487) || 1) && $this->valueHolder4137487 = $valueHolder4137487;

        return $this->valueHolder4137487->createPayment($Delivery, $method, $charge, $rule_min, $rule_max);
    }

    /**
     * {@inheritDoc}
     */
    public function createDelivery($delivery_time_max_pattern = 5)
    {
        $this->initializer4137487 && ($this->initializer4137487->__invoke($valueHolder4137487, $this, 'createDelivery', array('delivery_time_max_pattern' => $delivery_time_max_pattern), $this->initializer4137487) || 1) && $this->valueHolder4137487 = $valueHolder4137487;

        return $this->valueHolder4137487->createDelivery($delivery_time_max_pattern);
    }

    /**
     * {@inheritDoc}
     */
    public function createPage()
    {
        $this->initializer4137487 && ($this->initializer4137487->__invoke($valueHolder4137487, $this, 'createPage', array(), $this->initializer4137487) || 1) && $this->valueHolder4137487 = $valueHolder4137487;

        return $this->valueHolder4137487->createPage();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?: $reflection = new \ReflectionClass(__CLASS__);
        $instance = (new \ReflectionClass(get_class()))->newInstanceWithoutConstructor();

        unset($instance->locale, $instance->entityManager, $instance->passwordEncoder, $instance->memberRepository, $instance->customerRepository, $instance->classNameRepository, $instance->classCategoryRepository, $instance->durationRepository, $instance->deliveryFeeRepository, $instance->paymentRepository, $instance->taxRuleRepository, $instance->pageRepository, $instance->PrefRepository, $instance->session, $instance->orderPurchaseFlow);

        $instance->initializer4137487 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\Doctrine\ORM\EntityManagerInterface $entityManager, \Eccube\Security\Core\Encoder\PasswordEncoder $passwordEncoder, \Eccube\Repository\MemberRepository $memberRepository, \Eccube\Repository\CategoryRepository $categoryRepository, \Eccube\Repository\CustomerRepository $customerRepository, \Eccube\Repository\ClassNameRepository $classNameRepository, \Eccube\Repository\ClassCategoryRepository $classCategoryRepository, \Eccube\Repository\DeliveryDurationRepository $durationRepository, \Eccube\Repository\DeliveryFeeRepository $deliveryFeeRepository, \Eccube\Repository\PaymentRepository $paymentRepository, \Eccube\Repository\PageRepository $pageRepository, \Eccube\Repository\Master\PrefRepository $prefRepository, \Eccube\Repository\TaxRuleRepository $taxRuleRepository, \Eccube\Service\PurchaseFlow\PurchaseFlow $orderPurchaseFlow, \Symfony\Component\HttpFoundation\Session\SessionInterface $session, $locale = 'ja_JP')
    {
        static $reflection;

        if (! $this->valueHolder4137487) {
            $reflection = $reflection ?: new \ReflectionClass('Eccube\\Tests\\Fixture\\Generator');
            $this->valueHolder4137487 = $reflection->newInstanceWithoutConstructor();
        unset($this->locale, $this->entityManager, $this->passwordEncoder, $this->memberRepository, $this->customerRepository, $this->classNameRepository, $this->classCategoryRepository, $this->durationRepository, $this->deliveryFeeRepository, $this->paymentRepository, $this->taxRuleRepository, $this->pageRepository, $this->PrefRepository, $this->session, $this->orderPurchaseFlow);

        }

        $this->valueHolder4137487->__construct($entityManager, $passwordEncoder, $memberRepository, $categoryRepository, $customerRepository, $classNameRepository, $classCategoryRepository, $durationRepository, $deliveryFeeRepository, $paymentRepository, $pageRepository, $prefRepository, $taxRuleRepository, $orderPurchaseFlow, $session, $locale);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer4137487 && ($this->initializer4137487->__invoke($valueHolder4137487, $this, '__get', ['name' => $name], $this->initializer4137487) || 1) && $this->valueHolder4137487 = $valueHolder4137487;

        if (isset(self::$publicProperties4137487[$name])) {
            return $this->valueHolder4137487->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4137487;

            $backtrace = debug_backtrace(false);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    get_parent_class($this),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
            return;
        }

        $targetObject = $this->valueHolder4137487;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     * @param mixed $value
     */
    public function __set($name, $value)
    {
        $this->initializer4137487 && ($this->initializer4137487->__invoke($valueHolder4137487, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer4137487) || 1) && $this->valueHolder4137487 = $valueHolder4137487;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4137487;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder4137487;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __isset($name)
    {
        $this->initializer4137487 && ($this->initializer4137487->__invoke($valueHolder4137487, $this, '__isset', array('name' => $name), $this->initializer4137487) || 1) && $this->valueHolder4137487 = $valueHolder4137487;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4137487;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder4137487;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __unset($name)
    {
        $this->initializer4137487 && ($this->initializer4137487->__invoke($valueHolder4137487, $this, '__unset', array('name' => $name), $this->initializer4137487) || 1) && $this->valueHolder4137487 = $valueHolder4137487;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4137487;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder4137487;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializer4137487 && ($this->initializer4137487->__invoke($valueHolder4137487, $this, '__clone', array(), $this->initializer4137487) || 1) && $this->valueHolder4137487 = $valueHolder4137487;

        $this->valueHolder4137487 = clone $this->valueHolder4137487;
    }

    public function __sleep()
    {
        $this->initializer4137487 && ($this->initializer4137487->__invoke($valueHolder4137487, $this, '__sleep', array(), $this->initializer4137487) || 1) && $this->valueHolder4137487 = $valueHolder4137487;

        return array('valueHolder4137487');
    }

    public function __wakeup()
    {
        unset($this->locale, $this->entityManager, $this->passwordEncoder, $this->memberRepository, $this->customerRepository, $this->classNameRepository, $this->classCategoryRepository, $this->durationRepository, $this->deliveryFeeRepository, $this->paymentRepository, $this->taxRuleRepository, $this->pageRepository, $this->PrefRepository, $this->session, $this->orderPurchaseFlow);
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer4137487 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer4137487;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer4137487 && ($this->initializer4137487->__invoke($valueHolder4137487, $this, 'initializeProxy', array(), $this->initializer4137487) || 1) && $this->valueHolder4137487 = $valueHolder4137487;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder4137487;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder4137487;
    }


}
