 <?php
    namespace src\Models\Comment;
    use src\Models\User\User;
    use src\ActiveRecordEntity;
    class Comment extends ActiveRecordEntity
    {
        protected $title;
        protected $text;
        protected $authorId;

        public function getAuthorId():User
        {
            $user = User::getById($this->authorId);
            return $user;
        }
        public function getTitle():string
        {
            return $this->title;
        }
        public function getText():string
        {
            return $this->text;
        }
        public function setTitle(string $title){
            $this->title = $title;
        }
        public function setText(string $text){
            $this->text = $text;
        }
        public function setAuthorId(string $authorId){
            $this->authorId = $authorId;
        }
        public static function getTableName():string
        {
            return 'articles';
        }
    }
   