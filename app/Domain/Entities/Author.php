<?php

namespace App\Domain\Entities;

class Author
{
    private int $id;
    private String $name;
    private String $email;
    private String $city;
    private String $website;
    private String $company;

    private function __construct(int $id, string $name, string $email, string $city, string $website, string $company)
    {
        $this->id = $id;
        $this->$name = $name;
        $this->email = $email;
        $this->city = $city;
        $this->website = $website;
        $this->company = $company;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function getWebsite(): string
    {
        return $this->website;
    }

    public function getCompany(): string
    {
        return $this->company;
    }
}
