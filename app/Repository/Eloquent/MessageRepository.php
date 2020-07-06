<?php

    namespace App\Repository\Eloquent;
    use App\Repository\MessageRepositoryInterface;
    use App\Message;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Support\Facades\Auth;

    class MessageRepository extends AbstractBaseRepository implements MessageRepositoryInterface
    {
        public function __construct(Tender $model)
        {
            parent::__construct($model);
        }

        public function view(){
            $views = Message::orderBy('id')
                 ->where('tender_id', '2')
                 ->get();
            return $views->load('bids');            
        }

    }