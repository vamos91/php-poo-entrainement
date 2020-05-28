<?php
class BankAccount
{
    const TAX = 0.08;
    private $accountNumber;
    private $balance = 0;

    public function __construct($accountNumber)
    {
        $this->accountNumber = $accountNumber;
    }

    public function setBalance($balance)
    {
        if($balance < 10000){
            throw new Exception('Not enought money');
        }
        $this->balance = $balance;
    }

    public function getBalance()
    {
        return $this->balance * 100;
    }

    public static function getTax()
    {
        return TAX;
    }
}

$monCompte = new BankAccount('254245264262462462462');

echo BankAccount::TAX;
