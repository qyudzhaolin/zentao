<?php
class hello extends control
{
    /**
     * Construct function, load project, product.
     * 
     * @access public
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * The index page of whole zentao system.
     * 
     * @access public
     * @return void
     */
    public function word()
    {
        $data = $this->hello->word();
        $this->view->data = $data;
        $this->display();
    }


}
