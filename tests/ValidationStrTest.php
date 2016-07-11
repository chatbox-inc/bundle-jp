<?php


class ValidationStrTest extends PHPUnit_Framework_TestCase{

    /** @var  \Chatbox\Bundle\Validation\Str */
    protected $val;

    protected function setUp()
    {
        parent::setUp();
        $this->val = new \Chatbox\Bundle\Validation\Str();
    }


    public function testHiragana(){
        $this->assertTrue($this->val->isHiragana("きのこ"));
        $this->assertTrue($this->val->isHiragana("なめこ"));
        $this->assertTrue($this->val->isHiragana("はむ")); // ムが鬼門らしい
        $this->assertTrue($this->val->isHiragana("あじさい"));
        $this->assertTrue($this->val->isHiragana("なめこ"));

        $this->assertFalse($this->val->isHiragana("アジサイ"));
        $this->assertFalse($this->val->isHiragana("感じ"));
        $this->assertFalse($this->val->isHiragana("埼玉"));
    }

    public function testKatakana(){
        $this->assertTrue($this->val->isKatakana("キノコ"));
        $this->assertTrue($this->val->isKatakana("ナメコ"));
        $this->assertTrue($this->val->isKatakana("ハム"));
        $this->assertTrue($this->val->isKatakana("アジサイ"));
        $this->assertTrue($this->val->isKatakana("パンダ")); //ダが鬼門らしい

        $this->assertFalse($this->val->isKatakana("あじさい"));
        $this->assertFalse($this->val->isKatakana("感じ"));
        $this->assertFalse($this->val->isKatakana("埼玉"));
        $this->assertFalse($this->val->isKatakana("piero"));
    }
}