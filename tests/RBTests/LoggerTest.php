<?php
namespace RBTests;

use Src\Logger\OutputLogger;
use Symfony\Component\Console\Output\NullOutput;

class LoggerTest extends RBCaseTest {
	
	public function testLoggerError() {
		$logger = new OutputLogger( new NullOutput() );
		$this->assertEmpty( $logger->log( "Test", $logger->setError() ) );
		if ( $logger->isMail() )
			$this->assertFalse( $logger->send( 'noexist@email.com', 'noexist@email.com' ) );
	}
	
	public function testLoggerInfo() {
		$logger = new OutputLogger( new NullOutput() );
		$this->assertEmpty( $logger->log( "Test", $logger->setInfo() ) );
	}
	
	public function testLoggerDebug() {
		$logger = new OutputLogger( new NullOutput() );
		$this->assertEmpty( $logger->log( "Test", $logger->setDebug() ) );
	}

	public function testLoggerNotice() {
		$logger = new OutputLogger( new NullOutput() );
		$this->assertEmpty( $logger->log( "Test", $logger->setNotice() ) );
	}
	
}
