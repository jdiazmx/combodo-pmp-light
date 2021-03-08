<?php
/**
 * Localized data
 *
 * @copyright   Copyright (C) 2013 XXXXX
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

// Contact class
Dict::Add('ES CR', 'Spanish', 'Español, Castellaño', array(
	'Class:Contact/Attribute:project_list' => 'Proyectos abiertos en los que estoy involucrado',
	'Class:Contact/Attribute:projects_list' => 'Proyectos',
	'Class:Contact/Attribute:wbs_list' => 'Entregables abiertos en los que estoy involucrado',
	'Class:Contact/Attribute:wbss_list' => 'Entregables',
	'Class:Contact/Attribute:wbss_list+' => 'Entregables en los que trabajar',
	'Class:Contact/Tab:PMP' => 'Proyectos y entregables',
	'Class:Contact/Tab:PMP+' => 'Todos los proyectos abiertos y entregables en los que trabajo',
	'Class:lnkContactToProject' => 'Enlace Contacto / Proyecto',
	'Class:lnkContactToProject/Attribute:contact_id' => 'Contacto',
	'Class:lnkContactToProject/Attribute:project_id' => 'Proyecto',
	'Class:lnkContactToProject/Attribute:role/Value:1' => 'Cliente',
	'Class:lnkContactToProject/Attribute:role/Value:2' => 'Recurso',
	'Class:lnkContactToProject/Name' => '%1$s - %2$s',
	'Class:lnkContactToTicket/Attribute:allocated_days' => 'Días asignados',
	'Class:lnkContactToTicket/Attribute:allocated_percent' => 'Porcentaje asignado',
	'Class:lnkContactToTicket/Attribute:category' => 'Responsabilidad',
	'Class:lnkContactToTicket/Attribute:category/Value:1' => 'Cliente',
	'Class:lnkContactToTicket/Attribute:category/Value:2' => 'Recurso',
	'Class:lnkContactToTicket/Attribute:influence' => 'Influencia',
	'Class:lnkContactToTicket/Attribute:influence/Value:objector' => 'Objetor',
	'Class:lnkContactToTicket/Attribute:influence/Value:partner' => 'Compañero',
	'Class:lnkContactToTicket/Attribute:influence+' => 'Comportamiento en este proyecto',
	'Class:lnkContactToTicket/Attribute:power/Value:low' => 'Bajo',
	'Class:lnkContactToTicket/Attribute:power/Value:strong' => 'Fuerte',
	'Class:lnkContactToTicket/Attribute:power' => 'Poder',
	'Class:lnkContactToTicket/Attribute:power+' => 'Poder de decisión',
	'Class:lnkContactToWBS' => 'Vincular contacto/WBS',
	'Class:lnkContactToWBS/Attribute:allocated_days' => 'Días asignados',
	'Class:lnkContactToWBS/Attribute:allocated_percent' => 'Porcentaje asignado',
	'Class:lnkContactToWBS/Attribute:category' => 'Responsabilidad',
	'Class:lnkContactToWBS/Attribute:category/Value:1' => 'Cliente',
	'Class:lnkContactToWBS/Attribute:category/Value:2' => 'Recurso',
	'Class:lnkContactToWBS/Attribute:contact_id' => 'Partes interesadas',
	'Class:lnkContactToWBS/Attribute:influence' => 'Influencia',
	'Class:lnkContactToWBS/Attribute:influence+' => 'Comportamiento en este proyecto',
	'Class:lnkContactToWBS/Attribute:influence/Value:objector' => 'Objetor',
	'Class:lnkContactToWBS/Attribute:influence/Value:partner' => 'Compañero',
	'Class:lnkContactToWBS/Attribute:power/Value:low' => 'Bajo',
	'Class:lnkContactToWBS/Attribute:power/Value:strong' => 'Fuerte',
	'Class:lnkContactToWBS/Attribute:power' => 'Poder',
	'Class:lnkContactToWBS/Attribute:power+' => 'Poder de decisión',
	'Class:lnkContactToWBS/Attribute:wbs_id' => 'Entregables',
	'Class:lnkContactToWBS/Name' => '%1$s - %2$s',
));

// Project class
Dict::Add('ES CR', 'Spanish', 'Español, Castellaño', array(
	'Class:Project' => 'Proyecto',
	'Class:Project/Attribute:agent_id' => 'Project manager',
	'Class:Project/Attribute:allocatedtimes_list' => 'Tiempos asignados',
	'Class:Project/Attribute:calculated_end_date' => 'Fecha de finalización del último entregable',
	'Class:Project/Attribute:calculated_end_date+' => 'Tome la última fecha de entrega',
	'Class:Project/Attribute:caller_id' => 'Patrocinador',
	'Class:Project/Attribute:constraints' => 'Restricciones',
	'Class:Project/Attribute:creation_date' => 'Fecha de creación',
	'Class:Project/Attribute:description' => 'Descripción',
	'Class:Project/Attribute:estimated_budget' => 'Presupuesto estimado',
	'Class:Project/Attribute:exclusions' => 'Exclusiones',
	'Class:Project/Attribute:contacts_list' => 'Partes interesadas',
	'Class:Project/Attribute:contacts_list+' => 'Todos los contactos involucrados en el proyecto',
	'Class:Project/Attribute:projectchanges_list' => 'Cambios en el proyecto',
	'Class:Project/Attribute:projectchanges_list_displaybare' => 'Cambios en el proyecto no cerrado ni rechazado, vinculado a un entregable no cerrado',
	'Class:Project/Attribute:status' => 'Estado',
	'Class:Project/Attribute:status/Value:cancelled' => 'Cancelado',
	'Class:Project/Attribute:status/Value:closed' => 'Cerrado',
	'Class:Project/Attribute:status/Value:executed' => 'En ejecución',
	'Class:Project/Attribute:status/Value:initiated' => 'Iniciado',
	'Class:Project/Attribute:status/Value:monitored' => 'Supervisado',
	'Class:Project/Attribute:status/Value:planned' => 'En planeación',
	'Class:Project/Attribute:team_id' => 'Equipo del Proyecto',
	'Class:Project/Attribute:title' => 'Título',
	'Class:Project/Attribute:wbs_cost' => 'Costo de entregable',
	'Class:Project/Attribute:wbs_costs' => 'Costos de entregables',
	'Class:Project/Attribute:wbss_list' => 'Entregables',
	'Class:Project/Attribute:tickets_list' => 'Tickets Relacionados',
	'Class:Project/Attribute:wbss_list_displaybare' => 'Entregables no cerrados',
	'Class:Project/Attribute:requirement' => 'Requisitos',
	'Class:Project/Attribute:org_id' => 'Cliente',
	'Class:Project/Name' => '%1$s-%2$s',
	'Class:Project/Stimulus:ev_cancel' => 'Cancelar proyecto',
	'Class:Project/Stimulus:ev_close' => 'Cerrar',
	'Class:Project/Stimulus:ev_execute' => 'Ejecutar',
	'Class:Project/Stimulus:ev_monitor' => 'Supervisar',
	'Class:Project/Stimulus:ev_monotir' => 'Para supervisar',
	'Class:Project/Stimulus:ev_plan' => 'Planear',
	'Class:Project/Stimulus:ev_reexecute' => 'Volver a ejecutar',
	'Class:Project/Tab:Summary' => 'Resumen',
	'Class:Project/Tab:Summary+' => 'Resumen del proyecto actual',
	'Class:Project:Display:delivrables_costs' => 'Costos de todos los entregables',
	'Class:Project/Attribute:revised_end_date' => 'Fecha de finalización revisada',
	'Class:Project/Attribute:mgt_reserve_budget' => 'Gestión de presupuesto de reserva',
	'Class:Project/Attribute:mgt_reserve_budget+' => 'Monto de presupuesto reservado para gestión y eventos imprevistos',
	'Class:Project/Attribute:gant_wbs' => 'Gantt',
	'Class:Project:Summary_costs' => 'Información de costos',
	'Class:Project:Summary_general' => 'Información general',
	'Project:Budget' => 'Costos',
	'Project:Contacts' => 'Contactos',
	'Project:Costs' => 'Costos',
	'Project:Dates' => 'Fechas',
	'Project:Details' => 'Detalles',
	'Project:Error:EndDateMustBeGreaterThanStartDate' => 'La fecha de finalización debe ser mayor que la fecha de inicio',
	'Project:Error:ProjectEndDateMustBeGreaterThanWBSEndDate' => 'La fecha de finalización del proyecto debe ser mayor que la última fecha de entrega',
	'Project:GeneralInfo' => 'Información',

	'Menu:MyProject' => 'Mis proyectos',
	'Menu:MyProject+' => 'Mis proyectos como project manager',
	'Menu:NewProject' => 'Nuevo proyecto',
	'Menu:Overview' => 'Visión general',
	'Menu:Project:Overview' => 'Visión general',
	'Menu:ProjectChangeMenu' => 'Cambio de proyecto',
	'Menu:ProjectManagement' => 'Administración de Proyectos',
	'Menu:ProjectMenu' => 'Proyecto',
	'Menu:SearchProject' => 'Buscar proyecto',

	'UI:AddLinkedObjectsOf_Class' => 'Añadir %1$s objetos...',
	'UI:ProjectMgmtMenuOverview:Title' => 'Tablero',
	'UI-IssueManagementOverview-OpenIssueByProject' => 'Asuntos abiertos por cliente del proyecto',
	'UI-ProjectManagementOverview-Last-12Months' => 'Proyectos de los últimos 12 meses (por fecha de inicio del proyecto)',
	'UI-ProjectManagementOverview-Last-3Months' => 'Proyectos de los últimos 3 meses (por cliente)',
	'UI-ProjectManagementOverview-OpenProjectByStatus' => 'Proyectos abiertos por estado',

	'Class:Project/CreateDeliverable' => 'Crear entregable',
	'Class:Project/CreateDeliverableForm' => 'Crear un entregable a partir de %1$s',
	'Class:Project/ReportLabel' => 'Creado a partir de %1$s',
	'Class:Project/DuplicateProject' => 'Duplicar Proyecto',
	'Class:Project/DuplicateProjectForm' => 'Duplicar proyecto de %1$s',
	'Class:Ticket/Attribute:related_project' => 'Proyecto relacionado',
	'Class:Ticket/Attribute:related_project_id' => 'Proyecto relacionado',

));


// WBS class
Dict::Add('ES CR', 'Spanish', 'Español, Castellaño', array(
	'Class:WBS' => 'Entregable',
	'Class:WBS/Attribute:acceptance' => 'Criterios de aceptación',
	'Class:WBS/Attribute:available_budget' => 'Presupuesto disponible',
	'Class:WBS/Attribute:completion' => '% completo',
	'Class:WBS/Attribute:contacts_list' => 'Partes interesadas',
	'Class:WBS/Attribute:contacts_list_proj_displaybare' => 'Partes interesadas vinculadas al proyecto',
	'Class:WBS/Attribute:contacts_list_wbs_displaybare' => 'Partes interesadas vinculadas a la ejecución de entregables',
	'Class:WBS/Attribute:contacts_list+' => 'Todos los contactos involucrados en los entregables',
	'Class:WBS/Attribute:delay' => 'Demora',
	'Class:WBS/Attribute:description' => 'Descripción',
	'Class:WBS/Attribute:end_date' => 'Fecha de finalización solicitada',
	'Class:WBS/Attribute:freetime' => 'Desde ahora hasta la fecha de finalización',
	'Class:WBS/Attribute:labor_cost' => 'Costo de producción',
	'Class:WBS/Attribute:material_cost' => 'Costo del material',
	'Class:WBS/Attribute:name' => 'Nombre',
	'Class:WBS/Attribute:project_id' => 'Proyecto',
	'Class:WBS/Attribute:re_estimated_end_date' => 'Fecha de finalización planeada',
	'Class:WBS/Attribute:re_estimated_start_date' => 'Fecha de inicio planiada',
	'Class:WBS/Attribute:ref' => 'Ref',
	'Class:WBS/Attribute:start_date' => 'Fecha de inicio solicitada',
	'Class:WBS/Attribute:status' => 'Estado',
	'Class:WBS/Attribute:status/Value:cancel' => 'Cancelado',
	'Class:WBS/Attribute:status/Value:closed' => 'Terminado',
	'Class:WBS/Attribute:status/Value:pending_parent' => 'Pendiente entregable padre',
	'Class:WBS/Attribute:status/Value:running' => 'En ejecución',
	'Class:WBS/Attribute:status+' => 'Estado en WBS',
	'Class:WBS/Attribute:technical_info' => 'Información técnica',
	'Class:WBS/Attribute:time_planned' => 'Tiempo planificado',
	'Class:WBS/Attribute:wbs_budget' => 'Presupuesto',
	'Class:WBS/Attribute:wbs_cost' => 'Costo total',
	'Class:WBS/Attribute:wbs_log' => 'Registro de entrega',
	'Class:WBS/Attribute:wbs_owner_id' => 'Propietario',
	'Class:WBS/Attribute:wbs_real_costs' => 'WBS costos reales',
	'Class:WBS/Attribute:wbss_child_list' => 'Entregables hijo',
	'Class:WBS/Attribute:wbss_parent_list' => 'Entregables padre',
	'Class:WBS/Name' => '%1$s-%2$s',
	'Class:WBS/Stimulus:ev_cancel' => 'Cancelar entregable',
	'Class:WBS/Stimulus:ev_closed' => 'Cerrado',
	'Class:WBS/Stimulus:ev_reopen' => 'Reabrir',
	'Class:WBS/Stimulus:ev_running_admin' => 'Activar tarea hija',
	'Class:WBS+' => 'Lista de entregables de la estructura de desglose del trabajo (WBS - Work Breakdown Structure)',
	'WBS:Cost' => 'Costos',
	'WBS:Dates' => 'Fechas',
	'WBS:Error:ParentCantBeChildren' => 'No puedes ser tu propio entregable padre',
	'WBS:Execution' => 'Ejecución',
	'WBS:Info' => 'Información',
	'Class:WBS/Error:Contactnotfound' => '%1$s no se define como parte interesada del proyecto vinculado? Deberías agregarlo.',

	'Class:lnkWBSToWBS' => 'Vincular WBS hijo con WBS Padre',
	'Class:lnkWBSToWBS/Attribute:child_wbs_id' => 'Entregable hijo',
	'Class:lnkWBSToWBS/Attribute:parent_wbs_id' => 'Entregable padre',
	'Class:lnkWBSToWBS/Attribute:wbs_id' => 'Entregable padre',
	'Class:lnkWBSToWBS/Name' => '%1$s - %2$s',

	'Menu:MyWBS' => 'Mis entregables',
	'Menu:MyWBS+' => 'WBS que poseo',
	'Menu:NewWBS' => 'Nuevo entregable',
	'Menu:WBSMenu' => 'Entregables',
	'Menu:SearchWBS' => 'Buscar entregable',
	'UI-WBSManagementOverview-OpenWBSByProject' => 'Entregables abiertos por cliente',
));


//
// Class: Ticket
//

Dict::Add('ES CR', 'Spanish', 'Español, Castellaño', array(
	'Class:Ticket/Attribute:related_project_ref' => 'Proyecto relacionado ref',
	'Class:Ticket/Attribute:related_project_ref+' => '',
));

//
// Class: WBS
//

Dict::Add('ES CR', 'Spanish', 'Español, Castellaño', array(
	'Class:WBS/Stimulus:ev_pending_parent' => 'Padre pendiente',
	'Class:WBS/Stimulus:ev_pending_parent+' => '',
	'Class:WBS/Stimulus:ev_running' => 'En ejecución',
	'Class:WBS/Stimulus:ev_running+' => '',
));

//
// Class: lnkWBSToWBS
//

Dict::Add('ES CR', 'Spanish', 'Español, Castellaño', array(
	'Class:lnkWBSToWBS/Attribute:child_start_date' => 'Fecha de inicio del hijo',
	'Class:lnkWBSToWBS/Attribute:child_start_date+' => '',
	'Class:lnkWBSToWBS/Attribute:child_end_date' => 'Fecha de finalización del hijo',
	'Class:lnkWBSToWBS/Attribute:child_end_date+' => '',
	'Class:lnkWBSToWBS/Attribute:parent_start_date' => 'Fecha de inicio del padre',
	'Class:lnkWBSToWBS/Attribute:parent_start_date+' => '',
	'Class:lnkWBSToWBS/Attribute:parent_end_date' => 'Fecha de finalización del padre',
	'Class:lnkWBSToWBS/Attribute:parent_end_date+' => '',
));

//
// Class: lnkContactToWBS
//

Dict::Add('ES CR', 'Spanish', 'Español, Castellaño', array(
	'Class:lnkContactToWBS/Attribute:project_id' => 'Proyecto ID',
	'Class:lnkContactToWBS/Attribute:project_id+' => '',
));
