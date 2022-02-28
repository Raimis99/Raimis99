<?php

namespace Model;

use Core\AbstractModel;
use Core\Interface\ModelInterface;

class Comment extends AbstractModel implements ModelInterface
{
    protected const TABLE = 'comments';
    private $comment;
    private $user_id;
    private $ad_id;
    private $created_At;

    public function getComment()
    {
        return $this->comment;
    }
    public function setComment($comment)
    {
        $this->comment = $comment;
    }
    public function getUserId()
    {
        return $this->user_id;
    }
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }
    public function getAdId()
    {
        return $this->ad_id;
    }
    public function setAdId($ad_id)
    {
        $this->ad_id = $ad_id;
    }
    public function getCreatedAt()
    {
        return $this->created_At;
    }
    public function setCreatedAt($created_At)
    {
        $this->created_At = $created_At;
    }
    protected function assignData()
    {
      $this->data = [
          "comment" => $this->comment,
          "user_id" => $this->user_id,
          "ad_id" => $this->ad_id,
          "created_at" => $this->created_At
      ];
    }
    public function load($id)
    {

    }


}