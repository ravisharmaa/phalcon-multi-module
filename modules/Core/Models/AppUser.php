<?php

namespace App\Core\Models;

class AppUser extends Base
{

    protected $UserName;

    protected $UserId;

    public function getSource()
    {
        return 'AppUsers';
    }

    public function columnMap()
    {
        return [
            'UserId'   => 'id',
        ];
    }

    /**
     * @return mixed
     */
    public function getUserName()
    {
        return $this->UserName;
    }

    /**
     * @param mixed $UserName
     *
     * @return AppUser
     */
    public function setUserName($UserName)
    {
        $this->UserName = $UserName;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->UserId;
    }

    /**
     * @param mixed $UserId
     *
     * @return AppUser
     */
    public function setUserId($UserId)
    {
        $this->UserId = $UserId;

        return $this;
    }
}
