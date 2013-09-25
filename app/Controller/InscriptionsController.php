<?php

Class InscriptionsController extends AppController {

    public function inscription() {
        $isPost = $this->request->is('post');

        if ($isPost && !empty($this->request->data)) {
            if ($this->Inscription->save($this->request->data)) {
                $this->redirect(array('controller' => 'pages', 'action' => 'display', 'obrigadopelainscricao'));
            }
        }
    }

}

?>
