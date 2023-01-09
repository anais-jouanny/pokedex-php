<?php 

class Type {
    private $id;
    private $name;
    private $color;

    public function findAll() {
        $sql = "SELECT * FROM type";
        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);

        $myTypes = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'Type');
        return $myTypes;
    }
    
    public function findAllByPokemonNum($id) {
        $sql = "SELECT type.* FROM type JOIN pokemon_type ON pokemon_type.type_id = type.id JOIN pokemon ON pokemon.number = pokemon_type.pokemon_number WHERE pokemon.number=$id";
        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);

        $myTypes = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'Type');
        return $myTypes;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of color
     */ 
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */ 
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }
}