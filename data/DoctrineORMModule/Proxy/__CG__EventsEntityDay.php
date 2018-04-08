<?php

namespace DoctrineORMModule\Proxy\__CG__\Events\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Day extends \Events\Entity\Day implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();
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
            return array(
                '__isInitialized__',
                'date',
                'event',
                'sessions',
                'id',
                'sys_deleted',
                'sys_author',
                'sys_modified',
                'sys_creator',
                'sys_created'
            );
        }

        return array(
            '__isInitialized__',
            'date',
            'event',
            'sessions',
            'id',
            'sys_deleted',
            'sys_author',
            'sys_modified',
            'sys_creator',
            'sys_created'
        );
    }

    /**
     *
     */
    public function __wakeup()
    {
        if (!$this->__isInitialized__) {
            $this->__initializer__ = function (Day $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if (!array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
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
    public function __getInitializer()
    {
        return $this->__initializer__;
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
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
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
     */
    public function getDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDate', array());

        return parent::getDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setDate(\DateTime $date)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDate', array($date));

        return parent::setDate($date);
    }

    /**
     * {@inheritDoc}
     */
    public function getEvent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEvent', array());

        return parent::getEvent();
    }

    /**
     * {@inheritDoc}
     */
    public function setEvent(\Events\Entity\Event $event)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEvent', array($event));

        return parent::setEvent($event);
    }

    /**
     * {@inheritDoc}
     */
    public function getSessions()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSessions', array());

        return parent::getSessions();
    }

    /**
     * {@inheritDoc}
     */
    public function setSessions($sessions)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSessions', array($sessions));

        return parent::setSessions($sessions);
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setId($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', array($id));

        return parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getSys_deleted()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSys_deleted', array());

        return parent::getSys_deleted();
    }

    /**
     * {@inheritDoc}
     */
    public function setSys_deleted($sys_deleted)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSys_deleted', array($sys_deleted));

        return parent::setSys_deleted($sys_deleted);
    }

    /**
     * {@inheritDoc}
     */
    public function getSys_author()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSys_author', array());

        return parent::getSys_author();
    }

    /**
     * {@inheritDoc}
     */
    public function setSys_author($sys_author)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSys_author', array($sys_author));

        return parent::setSys_author($sys_author);
    }

    /**
     * {@inheritDoc}
     */
    public function getSys_modified()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSys_modified', array());

        return parent::getSys_modified();
    }

    /**
     * {@inheritDoc}
     */
    public function setSys_modified($sys_modified)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSys_modified', array($sys_modified));

        return parent::setSys_modified($sys_modified);
    }

    /**
     * {@inheritDoc}
     */
    public function getSys_creator()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSys_creator', array());

        return parent::getSys_creator();
    }

    /**
     * {@inheritDoc}
     */
    public function setSys_creator($sys_creator)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSys_creator', array($sys_creator));

        return parent::setSys_creator($sys_creator);
    }

    /**
     * {@inheritDoc}
     */
    public function getSys_created()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSys_created', array());

        return parent::getSys_created();
    }

    /**
     * {@inheritDoc}
     */
    public function setSys_created($sys_created)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSys_created', array($sys_created));

        return parent::setSys_created($sys_created);
    }

    /**
     * {@inheritDoc}
     */
    public function onBeforeCreate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'onBeforeCreate', array());

        return parent::onBeforeCreate();
    }

    /**
     * {@inheritDoc}
     */
    public function onBeforeUpdate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'onBeforeUpdate', array());

        return parent::onBeforeUpdate();
    }

    /**
     * {@inheritDoc}
     */
    public function onAfterCreate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'onAfterCreate', array());

        return parent::onAfterCreate();
    }

    /**
     * {@inheritDoc}
     */
    public function onAfterUpdate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'onAfterUpdate', array());

        return parent::onAfterUpdate();
    }

}
