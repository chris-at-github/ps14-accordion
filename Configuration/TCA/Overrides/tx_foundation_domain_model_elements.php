<?php
// ---------------------------------------------------------------------------------------------------------------------
// Weitere Felder fuer Elements

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_foundation_domain_model_elements', [
	'tx_accordion_active' => [
		'exclude' => true,
		'l10n_mode' => 'exclude',
		'label' => 'LLL:EXT:ps14_accordion/Resources/Private/Language/locallang_tca.xlf:elements.active',
		'config' => [
			'type' => 'check',
			'default' => 0
		]
	],
]);