<?php

class Set {
    private $set = [];

    private function isEmpty() {
        if ( count( $this->set ) === 0 ) {
            return true;
        }
        return false;
    }

    public function add( $value ) {
        if ( in_array( $value, $this->set, true ) ) {
            return $this;
        }
        array_push( $this->set, $value );
        return $this;
    }

    public function remove( $value ) {
        if ( $this->isEmpty() ) {
            throw new Exception( "Set is Empty. You can't use remove." );
        }
        $offset = array_search( $value, $this->set, true );
        if ( $offset !== false ) {
            array_splice( $this->set, $offset, 1 );
        }
        return $this;
    }

    public function isExists( $value ) {
        $offset = array_search( $value, $this->set, true );
        if ( $offset !== false ) {
            return true;
        }
        return false;
    }

    public function max() {
        return max( $this->set );
    }

    public function min() {
        return min( $this->set );
    }

    public function getSet() {
        return $this->set;
    }

    public function getSize() {
        return count( $this->set );
    }
}