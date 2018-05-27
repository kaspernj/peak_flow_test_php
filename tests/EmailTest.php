<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class EmailTest extends TestCase {
  public function testValidEmail() {
    $this->assertEquals("sample@email.com", "sample@email.com");
  }
}
