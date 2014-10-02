==========================
Análisis de Requerimientos
==========================

Funcionales
===========

- REQ-01 - Inicio de sesión en Panel de Gestión
    - El sistema deberá validar la información correspondiente al usuario y 
      permitir el ingreso a la plataforma. El usuario deberá tener un usuario 
      registrado en la web para poder visualizar el panel de gestión.
    - REQ ASOCIADO: REQ-02, REQ-03, REQ-04, REQ-05
- REQ-02 - Gestión de Noticias
    - Al iniciar sesión en el sistema deberá permitir al administrador crear,
      actualizar o eliminar las diferentes noticias de la base de datos.
    - REQ ASOCIADO: REQ-01
- REQ-03 - Gestión de Eventos
    - Al iniciar sesión en el sistema deberá permitir al administrador crear,
      actualizar o eliminar los diferentes eventos de la base de datos.
      Que serán reflejados en el calendario.
    - REQ ASOCIADO: REQ-01
- REQ-04 - Gestión de Fotografías
    - Al iniciar sesión en el sistema deberá permitir al administrador subir
      o eliminar fotografías de la galería.
    - REQ ASOCIADO: REQ-01
- REQ-05 - Gestión de Vídeos
    - Al iniciar sesión en el sistema deberá permitir al administrador subir
      o eliminar vídeos de la galería.
    - REQ ASOCIADO: REQ-01
- REQ-06 - Inicio de sesión a través de Redes Sociales
    - El sistema debe poder permitir el Inicio de Sesión solo a través de la
      API de Facebook. (Twitter y G+ no requeridas pero aconsejable)
    - REQ ASOCIADO: REQ-07
- REQ-07 - Postear Comentario
    - El sistema debe poder permitir comentar entradas de la web si se ha iniciado
      sesión a través de alguna red social.
    - REQ ASOCIADO: REQ-06


No Funcionales
==============
- REQ-08 - Nivel de Usuario
    - El sistema deberá permitir visualizar y gestionar la plataforma, 
      según los roles de usuario como administrador o usuario general.
    - REQ ASOCIADO: REQ-01
- REQ-09 - Interfaz del Usuario
    - El sistema deberá contar con una plataforma agradable, eficaz e 
      interesante.
    - REQ ASOCIADO: REQ-01
- REQ-10 - Acceso al software
    - El sistema estará en línea deberá permitir que los usuarios y el 
      administrador accedan a la página web.
    - REQ ASOCIADO: REQ-01
