<?php



require_once '../services/Database.php';




class Videogame {

    private $id;

    private $name;

    private $link;

    



    static private function createVideogameFromData($data) {

        return new Videogame(

            $data['id'],

            $data['name'],

            $data['link'],
      
            ),       

        );

    }



    static public function showAll() {

        $database = Database::getInstance();



        $sql = '

        SELECT `Videogame`.`id`, `Videogame`.`name`, `Videogame`.`link`, 

        FROM `Videogame`;

    
        $statement = $database->query($sql);



        $result = $statement->fetchAll();



        $result = array_map(

            'self::createVideogameFromData',

            $result

        );



        return $result;

    }



    static public function showById($id) {

        $database = Database::getInstance();



        $sql = '

        SELECT `Videogame`.`id`, `Videogame`.`name`, `Videogame`.`link`, 

        FROM `Videogame`

                WHERE `article`.`id` = :id;

        $statement = $database->prepare($sql);



        $statement->execute([ 'id' => $id ]);



        $result = $statement->fetchAll();



        $result = self::createVideogameFromData($result[0]);



        return $result;

    }





    public function __construct(

        ?int $id = null,

        string $name = '',

        string $link = '',

        

        

    ) {

        $this->id = $id;



        $this

            ->setname($name)

            ->setlink($link)

            

           

        ;



        

       

        }

    }



    /**

     * Get the value of id

     */ 

    public function getId(): int

    {

        return $this->id;

    }



    /**

     * Get the value of name

     */ 

    public function getname(): string

    {

        return $this->name;

    }



    /**

     * Set the value of name

     *

     * @return  self

     */ 

    public function setname(string $name): Videogame

    {

        $this->name= $name;



        return $this;

    }



    /**

     * Get the value of link

     */ 

    public function getlink(): string

    {

        return $this->link;

    }



    /**

     * Set the value of link

     *

     * @return  self

     */ 

    public function setlink(string $link): Videogame

    {

        $this->link= $link;



        return $this;

    }



   
        }









static private function deleteVideogameFromData($data) {

    return new Videogame(

        $data['id'],

        $data['name'],

        $data['link'],

        



        if($data['id']=$data['id'])



        return new Videogame(

            $data['id']= null,

            $data['name'],

            $data['link'],

              