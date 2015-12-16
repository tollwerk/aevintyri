<?php

namespace DoctrineORMModule\Proxy\__CG__\Events\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Session extends \Events\Entity\Session implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', 'name', 'level', 'requirements', 'day', 'start_time', 'end_time', 'room', 'presenters', 'tags', 'links', 'id', 'sys_deleted', 'sys_author', 'sys_modified', 'sys_creator', 'sys_created', 'hashtag', 'description', 'abstract', 'image');
        }

        return array('__isInitialized__', 'name', 'level', 'requirements', 'day', 'start_time', 'end_time', 'room', 'presenters', 'tags', 'links', 'id', 'sys_deleted', 'sys_author', 'sys_modified', 'sys_creator', 'sys_created', 'hashtag', 'description', 'abstract', 'image');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Session $proxy) {
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
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', array());

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', array($name));

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getDay()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDay', array());

        return parent::getDay();
    }

    /**
     * {@inheritDoc}
     */
    public function setDay($day)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDay', array($day));

        return parent::setDay($day);
    }

    /**
     * {@inheritDoc}
     */
    public function getStart_time()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStart_time', array());

        return parent::getStart_time();
    }

    /**
     * {@inheritDoc}
     */
    public function setStart_time($start_time)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStart_time', array($start_time));

        return parent::setStart_time($start_time);
    }

    /**
     * {@inheritDoc}
     */
    public function getEnd_time()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEnd_time', array());

        return parent::getEnd_time();
    }

    /**
     * {@inheritDoc}
     */
    public function setEnd_time($end_time)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEnd_time', array($end_time));

        return parent::setEnd_time($end_time);
    }

    /**
     * {@inheritDoc}
     */
    public function getTimes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTimes', array());

        return parent::getTimes();
    }

    /**
     * {@inheritDoc}
     */
    public function getPresenters()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPresenters', array());

        return parent::getPresenters();
    }

    /**
     * {@inheritDoc}
     */
    public function setPresenters($presenters)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPresenters', array($presenters));

        return parent::setPresenters($presenters);
    }

    /**
     * {@inheritDoc}
     */
    public function addPresenters(\Doctrine\Common\Collections\ArrayCollection $presenters)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPresenters', array($presenters));

        return parent::addPresenters($presenters);
    }

    /**
     * {@inheritDoc}
     */
    public function removePresenters(\Doctrine\Common\Collections\ArrayCollection $presenters)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removePresenters', array($presenters));

        return parent::removePresenters($presenters);
    }

    /**
     * {@inheritDoc}
     */
    public function getTags()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTags', array());

        return parent::getTags();
    }

    /**
     * {@inheritDoc}
     */
    public function setTags($tags)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTags', array($tags));

        return parent::setTags($tags);
    }

    /**
     * {@inheritDoc}
     */
    public function addTags(\Doctrine\Common\Collections\ArrayCollection $tags)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addTags', array($tags));

        return parent::addTags($tags);
    }

    /**
     * {@inheritDoc}
     */
    public function removeTags(\Doctrine\Common\Collections\ArrayCollection $tags)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeTags', array($tags));

        return parent::removeTags($tags);
    }

    /**
     * {@inheritDoc}
     */
    public function getLinks()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLinks', array());

        return parent::getLinks();
    }

    /**
     * {@inheritDoc}
     */
    public function setLinks($links)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLinks', array($links));

        return parent::setLinks($links);
    }

    /**
     * {@inheritDoc}
     */
    public function getLevel()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLevel', array());

        return parent::getLevel();
    }

    /**
     * {@inheritDoc}
     */
    public function setLevel($level)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLevel', array($level));

        return parent::setLevel($level);
    }

    /**
     * {@inheritDoc}
     */
    public function getRequirements()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRequirements', array());

        return parent::getRequirements();
    }

    /**
     * {@inheritDoc}
     */
    public function setRequirements($requirements)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRequirements', array($requirements));

        return parent::setRequirements($requirements);
    }

    /**
     * {@inheritDoc}
     */
    public function getRoom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoom', array());

        return parent::getRoom();
    }

    /**
     * {@inheritDoc}
     */
    public function setRoom($room)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRoom', array($room));

        return parent::setRoom($room);
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

    /**
     * {@inheritDoc}
     */
    public function getHashtag()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHashtag', array());

        return parent::getHashtag();
    }

    /**
     * {@inheritDoc}
     */
    public function setHashtag($hashtag)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHashtag', array($hashtag));

        return parent::setHashtag($hashtag);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', array());

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', array($description));

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getAbstract()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAbstract', array());

        return parent::getAbstract();
    }

    /**
     * {@inheritDoc}
     */
    public function setAbstract($abstract)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAbstract', array($abstract));

        return parent::setAbstract($abstract);
    }

    /**
     * {@inheritDoc}
     */
    public function getImage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImage', array());

        return parent::getImage();
    }

    /**
     * {@inheritDoc}
     */
    public function setImage($image)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImage', array($image));

        return parent::setImage($image);
    }

    /**
     * {@inheritDoc}
     */
    public function deleteImage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'deleteImage', array());

        return parent::deleteImage();
    }

}
