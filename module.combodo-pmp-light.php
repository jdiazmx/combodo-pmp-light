<?php
//
// iTop module definition file
//

SetupWebPage::AddModule(
	__FILE__, // Path to the current file, all other file names are relative to the directory containing this file
	'combodo-pmp-light/1.0.0',
	array(
		// Identification
		//
		'label' => 'Project Management light module',
		'category' => 'business',

		// Setup
		//
		'dependencies' => array(
			'itop-tickets/2.0.0',
			'itop-config-mgmt/2.0.0',
			'combodo-gantt-view/1.0.0',

		),
		'mandatory' => false,
		'visible' => true,
		'installer' => 'PMPLightInstaller',


		// Components
		//
		'datamodel' => array(
			'model.combodo-pmp-light.php',
			'src/Model/AttributeCompletionPercentage.php',
		),
		'webservice' => array(
			
		),
		'data.struct' => array(
			// add your 'structure' definition XML files here,
		),
		'data.sample' => array(
			// add your sample data XML files here,
		),
		
		// Documentation
		//
		'doc.manual_setup' => '', // hyperlink to manual setup documentation, if any
		'doc.more_information' => '', // hyperlink to more information, if any 

		// Default settings
		//
		'settings' => array(
			// Module specific settings go here, if any
		),
	)
);

if (!class_exists('PMPLightInstaller'))
{
	// Module installation handler
	//
	class PMPLightInstaller extends ModuleInstallerAPI
	{
		/**
		 * @inheritdoc
		 */
		public static function BeforeWritingConfig(Config $oConfiguration)
		{
			// Rule to add to the object copier configuration
			$aNewRule = array(
				'source_scope' => 'SELECT Project WHERE status NOT IN (\'close\',\'monitor\')',
				'allowed_profiles' => 'Project Manager,Administrator',
				'menu_label' => 'Class:Project/CreateDeliverable',
				'menu_label/FR FR' => 'Créer un délivrable...',
				'form_label' => 'Create a deliverable from %1$s',
				'form_label/FR FR' => 'Créer un délivrable pour %1$s',
				'report_label' => 'Created from %1$s',
				'report_label/FR FR' => 'Créée depuis %1$s',
				'dest_class' => 'WBS',
				'preset' =>
					array (
						0 => 'copy(id,project_id)',
						1 => 'set(start_date,$current_date$)',
					),
				'retrofit' =>
					array (
					),
			);

			// Retrieving object copier rules from conf parameters
			// Note: We don't do anything if object copier is not installed, otherwise its configuration will be set when installed.
			$aExistingRules = $oConfiguration->GetModuleSetting('itop-object-copier', 'rules', array());
			if(!empty($aExistingRules))
			{
				$bFound = false;
				foreach($aExistingRules as $aExistingRule)
				{
					if(isset($aExistingRule['menu_label']) && ($aExistingRule['menu_label'] === $aNewRule['menu_label']) )
					{
						$bFound = true;
						break;
					}
				}

				// Add rule only if not already existing
				if($bFound === false)
				{
					$aExistingRules[] = $aNewRule;
					$oConfiguration->SetModuleSetting('itop-object-copier', 'rules', $aExistingRules);
				}
			}

			return $oConfiguration;
		}
	}
}