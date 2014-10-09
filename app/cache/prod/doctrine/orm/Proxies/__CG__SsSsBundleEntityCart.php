<?php

namespace Proxies\__CG__\Ss\SsBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Cart extends \Ss\SsBundle\Entity\Cart implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'Ss\\SsBundle\\Entity\\Cart' . "\0" . 'id', '' . "\0" . 'Ss\\SsBundle\\Entity\\Cart' . "\0" . 'session_id', '' . "\0" . 'Ss\\SsBundle\\Entity\\Cart' . "\0" . 'qty', '' . "\0" . 'Ss\\SsBundle\\Entity\\Cart' . "\0" . 'token', '' . "\0" . 'Ss\\SsBundle\\Entity\\Cart' . "\0" . 'created_at', '' . "\0" . 'Ss\\SsBundle\\Entity\\Cart' . "\0" . 'updated_at', '' . "\0" . 'Ss\\SsBundle\\Entity\\Cart' . "\0" . 'products');
        }

        return array('__isInitialized__', '' . "\0" . 'Ss\\SsBundle\\Entity\\Cart' . "\0" . 'id', '' . "\0" . 'Ss\\SsBundle\\Entity\\Cart' . "\0" . 'session_id', '' . "\0" . 'Ss\\SsBundle\\Entity\\Cart' . "\0" . 'qty', '' . "\0" . 'Ss\\SsBundle\\Entity\\Cart' . "\0" . 'token', '' . "\0" . 'Ss\\SsBundle\\Entity\\Cart' . "\0" . 'created_at', '' . "\0" . 'Ss\\SsBundle\\Entity\\Cart' . "\0" . 'updated_at', '' . "\0" . 'Ss\\SsBundle\\Entity\\Cart' . "\0" . 'products');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Cart $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setSessionId($sessionId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSessionId', array($sessionId));

        return parent::setSessionId($sessionId);
    }

    /**
     * {@inheritDoc}
     */
    public function getSessionId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSessionId', array());

        return parent::getSessionId();
    }

    /**
     * {@inheritDoc}
     */
    public function setQty($qty)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setQty', array($qty));

        return parent::setQty($qty);
    }

    /**
     * {@inheritDoc}
     */
    public function getQty()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQty', array());

        return parent::getQty();
    }

    /**
     * {@inheritDoc}
     */
    public function setToken($token)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setToken', array($token));

        return parent::setToken($token);
    }

    /**
     * {@inheritDoc}
     */
    public function getToken()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getToken', array());

        return parent::getToken();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt($createdAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', array($createdAt));

        return parent::setCreatedAt($createdAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', array());

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAt($updatedAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', array($updatedAt));

        return parent::setUpdatedAt($updatedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', array());

        return parent::getUpdatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setProducts(\Ss\SsBundle\Entity\Product $products = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProducts', array($products));

        return parent::setProducts($products);
    }

    /**
     * {@inheritDoc}
     */
    public function getProducts()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProducts', array());

        return parent::getProducts();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAtValue()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAtValue', array());

        return parent::setCreatedAtValue();
    }

    /**
     * {@inheritDoc}
     */
    public function setTokenValue()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTokenValue', array());

        return parent::setTokenValue();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAtValue()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAtValue', array());

        return parent::setUpdatedAtValue();
    }

}
