<?php

class Article
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $slug;

    /**
     * @var int
     */
    private $status;

    const STATUS_PENDING = 0;

    const STATUS_VALIDATED = 1;

    const STATUS_REMOVED = 2;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return Article
     *
     * @throws Exception
     */
    public function setId($id)
    {
        if (is_int($id) && $id > 0)
            $this->id = $id;
        else
            throw new Exception('Id must be an integer and > 0');

        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     *
     * @return Article
     *
     * @throws Exception
     */
    public function setTitle($title)
    {
        if (is_string($title))
            $this->title = $title;
        else
            throw new Exception('Title must be a string');

        return $this;
    }

    /**
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @param string $slug
     *
     * @return Article
     *
     * @throws Exception
     */
    public function setSlug($slug)
    {
        if (is_string($slug))
            $this->slug = $slug;
        else
            throw new Exception('Slug must be a string');

        return $this;
    }

    /**
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param int $status
     *
     * @return Article
     *
     * @throws Exception
     */
    public function setStatus($status)
    {
        if (true === in_array($status, [
            self::STATUS_PENDING,
            self::STATUS_VALIDATED,
            self::STATUS_REMOVED,
        ]))
            $this->status = $status;
        else
            throw new Exception('Status is not valid');

        return $this;
    }
}
