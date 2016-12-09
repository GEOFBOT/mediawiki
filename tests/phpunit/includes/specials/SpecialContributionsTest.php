<?php

/**
 * @group Database
 */
class SpecialContributionsTest extends \PHPUnit_Framework_TestCase {
	/**
	 * @dataProvider testDateFilterOptionProcessingProvider
	 * @param array $expectedOpts Expected options
	 * @param array $actualOpts Actual options
	 */
	public function testDateFilterOptionProcessing( $actualOpts, $expectedOpts ) {
		$special = new SpecialContributions;
		$this->assertArraySubset( $expectedOpts, $special->processDateFilter( $actualOpts ) );
	}

	public static function testDateFilterOptionProcessingProvider() {
		return [
			[ [
				'start' => '2016-05-01',
			    'end' => '2016-06-01',
			    'year' => '',
			    'month' => ''
			  ], [
			  	'start' => '2016-05-01',
			    'end' => '2016-06-01',
			    'year' => '',
			    'month' => ''
			] ],
		];
	}
}
