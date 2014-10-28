var demo_tasks = {
	"data":[
		{"id":1, "text":"Planificación del proyecto", "start_date":"22-09-2014", "duration":"15", "progress": 1, "open": true},

		{"id":2, "text":"Documentar funciones", "start_date":"29-09-2014", "duration":"5", "parent":"1", "progress":1, "open": true},
		{"id":3, "text":"Preparar requisitos", "start_date":"30-09-2014", "duration":"3", "parent":"1", "progress":1, "open": true},
		
		{"id":4, "text":"Instalar framework", "start_date":"02-10-2014", "duration":"1", "progress": 1, "open": true},
		{"id":5, "text":"Imp. Sist. de Mantenimiento", "start_date":"03-10-2014", "duration":"7", "progress": 1, "open": true},
		{"id":6, "text":"Imp. Sist. de Administración", "start_date":"06-10-2014", "duration":"7", "progress": 1, "open": true},
		
		{"id":7, "text":"Maquetación", "start_date":"06-10-2014", "duration":"35", "progress": 1, "open": true},
		{"id":8, "text":"Maquetación mantenimiento", "start_date":"06-10-2014", "duration":"7", "parent":"7", "progress": 1, "open": true},
		{"id":9, "text":"Maquetación administración", "start_date":"13-10-2014", "duration":"7", "parent":"7", "progress": 1, "open": true},
		{"id":10, "text":"Maquetación tema principal", "start_date":"20-10-2014", "duration":"18", "parent":"7", "progress": 1, "open": true},
		
		{"id":11, "text":"Programar funcionalidades", "start_date":"17-10-2014", "duration":"34", "progress": 1, "open": true},
		{"id":12, "text":"Imp. Redes Sociales", "start_date":"10-11-2014", "duration":"10", "progress": 1, "open": true},
		{"id":13, "text":"Imp. Posicionamiento", "start_date":"20-11-2014", "duration":"9", "progress": 1, "open": true},

		{"id":14, "text":"Análisis técnico", "start_date":"01-12-2014", "duration":"3", "progress": 1, "open": true},
		{"id":15, "text":"Solución fallos", "start_date":"04-12-2014", "duration":"2", "parent":"14", "progress": 1, "open": true},
		{"id":16, "text":"Presentar", "start_date":"05-12-2014", "duration":"1", "parent":"14", "progress": 1, "open": true},

	],
	"links":[
		{"id":"1","source":"1","target":"2","type":"1"},
		{"id":"2","source":"1","target":"3","type":"1"},

		{"id":"3","source":"3","target":"4","type":"1"},
		{"id":"4","source":"4","target":"5","type":"1"},
		{"id":"5","source":"5","target":"6","type":"1"},

		{"id":"6","source":"7","target":"8","type":"1"},
		{"id":"7","source":"8","target":"9","type":"1"},
		{"id":"8","source":"9","target":"10","type":"1"},

		{"id":"9","source":"12","target":"13","type":"1"},

		{"id":"10","source":"14","target":"15","type":"1"},
		{"id":"11","source":"15","target":"16","type":"1"},
	]
};
