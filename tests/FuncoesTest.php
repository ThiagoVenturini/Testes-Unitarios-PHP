<?php

use PHPUnit\Framework\TestCase;
require_once __DIR__ . '/../src/Funcoes.php';

class FuncoesTest extends TestCase
{
    // Teste para isEven
    public function testIsEvenComNumeroPar()
    {
        $this->assertTrue(Funcoes::isEven(4));
    }

    public function testIsEvenComNumeroImpar()
    {
        $this->assertFalse(Funcoes::isEven(3));
    }

    // Testes para factorial
    public function testFactorialComNumeroPositivo()
    {
        $this->assertEquals(120, Funcoes::factorial(5));
    }

    public function testFactorialComZero()
    {
        $this->assertEquals(1, Funcoes::factorial(0));
    }

    public function testFactorialComNumeroNegativo()
    {
        $this->expectException(InvalidArgumentException::class);
        Funcoes::factorial(-3);
    }

    // Testes para isPalindrome
    public function testIsPalindromeComPalindromo()
    {
        $this->assertTrue(Funcoes::isPalindrome('Ame a ema'));
    }

    public function testIsPalindromeComNaoPalindromo()
    {
        $this->assertFalse(Funcoes::isPalindrome('ChatGPT'));
    }

    public function testIsPalindromeComCaracteresEspeciais()
    {
        $this->assertTrue(Funcoes::isPalindrome('Socorram-me subi no onibus em Marrocos!'));
    }

    // Testes para fahrenheitToCelsius
    public function testFahrenheitToCelsius()
    {
        $this->assertEquals(0, Funcoes::fahrenheitToCelsius(32));
        $this->assertEquals(100, Funcoes::fahrenheitToCelsius(212));
    }

    // Testes para calculateDiscount
    public function testCalculateDiscountValido()
    {
        $this->assertEquals(90, Funcoes::calculateDiscount(100, 10));
    }

    public function testCalculateDiscountComValorNegativo()
    {
        $this->expectException(InvalidArgumentException::class);
        Funcoes::calculateDiscount(-100, 10);
    }

    public function testCalculateDiscountComPercentualNegativo()
    {
        $this->expectException(InvalidArgumentException::class);
        Funcoes::calculateDiscount(100, -10);
    }
}
