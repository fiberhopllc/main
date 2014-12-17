<?php

    class TicketObj {
        protected $status = "unread";

        public function setUnread()
        {
            $this->status = 'unread';
        }

        public function isRead()
        {
            if ($this->status == 'read') {
                return true;
            } else if ($this->status == 'unread') {
                return false;
            } else {
                throw new \InvalidArgumentException;
            }
        }

        public function read()
        {
            $this->setRead();
        }

        public function setRead()
        {
            $this->status = 'read';
        }

        public function getStatus()
        {
            return $this->status;
        }

        public function isUnread()
        {
            return true;
        }
    }
