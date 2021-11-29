<?php

require_once 'Models/Model.php';
require_once 'Models/CommentsModel.php';

require_once 'API/APIView.php';
require_once 'helpers/AuthHelper.php';

class APIController{

    private $commentsModel;
    private $model;
    private $authHelper;
    private $apiView;
    private $data;

    public function __construct(){
        $this->commentsModel = new CommentsModel();
        $this->apiView = new ApiView();
        $this->data =file_get_contents("php://input");
    }

    private function getData() {
        return json_decode($this->data);
    }

    public function getAll() {
        $comments = $this->commentsModel->getAll();
        $this->apiView->response($comments,200);
        
    }


    public function getComment($params = null) {
        $id = $params[':ID'];
        $comment = $this->model->getComment($id);

        if ($comment)
            $this->view->response($comment);
        else
        $this->view->response("Comment id=$id not found", 404);
    }

    public function addComment($params = null)
    {
        $data = $this->getData();

        $comment = $data->comment;
        $score = $data->score;
        $id_book = $data->id_book;
        $id_user = $data->id_user;

        $this->commentsModel->addComment($comment, $score, $id_book, $id_user);
        $comments = $this->commentsModel->getAll();
        $this->apiView->response($comments,200);
        
    }

    public function delComment ($id){
        $data = $this->getData();
        

        $delComment = $data->model->getComment($id);
        /* $this->commentsModel->delComment($delComment); */

        /* $comments = $this->commentsModel->getAll();
        $this->apiView->response($comments,200); */

        if ($delComment) {
            $this->model->delComment($id);
            $this->view->response("Comment id=$id remove successfuly");
        } else {
            $this->view->response("Comment id=$id not found", 404);
        }
        }
}





 

   