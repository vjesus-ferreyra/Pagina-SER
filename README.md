# Proyecto Pagina Blog-Informativo para la organización Sueños, Esperanzas y Risas A.C (SER A.C)

> **¡IMPORTANTE!**
> En esta docuementacion hay partes que son partes en las que usted debe modificar a su criterio, estas partes se encuentras entre signos de mayor y menor, para que usted lo tome en cuenta 

## Indice
* [¿Qué se encuentra en este respositorio?](#¿qué-se-encuentra-en-este-respositorio)
* [Requisitos/Recusos previos a utilizar](#requisitosrecusos-previos-a-utilizar)
* [¿Cómo instalar los recursos?](#¿cómo-instalar-los-recursos)
    * [Editor de Codigo](#editor-de-codigo)
    * [Git](#git)
* [Configurar Git para trabajar](#configurar-git-para-trabajar)
* [¿Como descargo este repositorio a mi equipo local?](#¿como-descargo-este-repositorio-a-mi-equipo-local)
* [¿Comó actualizar las cosas en el repositorio?](#¿comó-actualizar-las-cosas-en-el-repositorio)
* [¿Cómo actualizo los cambios que se hagan en el respositorio remoto en mi repositorio local?](#¿cómo-actualizo-los-cambios-que-se-hagan-en-el-respositorio-remoto-en-mi-repositorio-local)

## ¿Qué se encuentra en este respositorio?
En este repositorio se encuentran todos los archivos con respecto al proyecto de la pagina para la organización sin animos de lucro Sueños, Esperanzas y Risas A.C (tambien conocida como SER A.C), cuyo objetivo es ayudar a los niñ@s de escasos recursos.

## Requisitos/Recusos previos a utilizar
Para poder utilizar los recursos que se encuentran en este respotorio en necesario contar con las siguintes cosas instaladas en tu maquina:
* Editor de codigo
* Git (Este es el mas importante)

### ¿Cómo instalar los recursos?
> En caso de no tenerlos instalados en tu maquina

#### **Editor de codigo**: 

El editor de codigo puede ser cualquiera, es de te tu preferencia, te sugiero estos que se encuentran en la lista:

* [Visual Studio Code](https://code.visualstudio.com/)

* [Sublime Text](https://www.sublimetext.com/)

* [Neovim](https://neovim.io/)

* [Notepad++](https://notepad-plus-plus.org/)

* [Nano](https://www.nano-editor.org/)

* notepad (bloc de notas)

#### **Git**: 
El sistema de control de versiones es muy util para los programadores asi nosostros poder tener el control de que mostrarle al cliente. Para poder intalarlo en Windows puedes usar cualquiera de las siguientes opciones:

* Opcion a: Entorno grafico:
    
    1. Entra en el [siguiente enlace](https://gitforwindows.org/) para poder descargarlo

    2. Una vez descargado, ejecuta el programa Git-2.40.0-64-bit.exe

    3. Una vez iniciado da click en siguiente, por cada ventana que aparezca.


* Opcion b: Por consola:
    > **¡Importante!** \
    > Para esto es necesario instalar la ultima version de [Powershell](https://apps.microsoft.com/store/detail/powershell/9MZ1SNWT0N5D?hl=es-mx&gl=mx&rtc=1)

Para instalar Git desde consola es necesario el siguiente comando:

```Powershell
winget install -e --id Git.Git
```

## Configurar Git para trabajar
> No es necesario configurar los editores de codigo, debido a quela gran mayoria ya vienen preconfigurados

Es necesario configurar git debido a que git no tiene una configuracion por defecto,debido a que este sistema trabaja mediante identidades, para configurar su identidad copia los siguientes comandos desde powershell o CMD; donde se te haga mas comodo:

1. Configurar su nombre:
```Bash
git config --global user.name "<Su nombre>"
```

2. Configurar su correo electronico:
```Bash
git config --global user.email <Su correo electronico>
```

3. Configurar su editor de codigo para trabajar con git:
> Para hacer esto es necesario entrar a la pagina de cada editor, aqui se muestran unos ejemplos:

a. Visual Studio Code
```Bash
git config --global core.editor "code --wait"
```

b. Sublime text
```Bash
git config --global core.editor "'C:/Program Files (x86)/sublime text 3/subl.exe' -w"
```

c. Notepad++
```Bash
git config --global core.editor "'C:/Program Files (x86)/Notepad++/notepad++.exe' -multiInst -notabbar -nosession -noPlugin"
```

## ¿Como descargo este repositorio a mi equipo local?

Git trabaja de dos maneras repositorios locales y remotos, y te preguntaras ¿Qué es un repositorio?, un reporitorio es la carpeta en donde se encuentra el proyecto, exiten dos tipos de respotorios locales, es decir en tu propia maquina y remotos alojados en algun servicio como [Github](https://github.com/). 

Para poder copiar o descargar este repositorio te recomiendo estar conectado a internet y usar el siguiente comando:

> Para poder saber el link del repositorio ve a la parte inferior y busca un boton de color verde o azul que tenga diga "<> code", da click en el y te mostraran varias opciones ve a la parte de clone y te debe aparecer un link; ese es el link del repositorio, copialo y pegalo junto al comando de abajo

```Bash
git clone <link de este respositorio>
```

## ¿Comó actualizar las cosas en el repositorio?

Para poder añadir o actualizar los archivos en este repositorio, primero es actualizar es decirle a git que vas a actualizar en tu repositorio local y despues en remoto, para ello sigue los siguientes pasos:

1. En una terminal (puede ser cmd, simbolo de sistema o la app de terminal de windows / linux), escribe el siguiente comando:

> El archivo debe incluir su entension respectivamente:

```Bash
git add <nombre del archivo>
```

> Si quieres agregar todos los archivos de jalon, utiliza el siguiente comando:

```Bash
git add *
```

2. Para poder confirmar en su pc los cambios realizados es necesario utilizar un comando para confirmar y dejar un mensaje de actualizacion, para ello puede utilizar cuaquiera de los siguientes comandos:

* Opcion A: En una sola linea de comando

```Bash
git commit -m "<Mensaje cualquiera>"
```

* Opcion B: Utilizando el editor de codigo
> Este editor de codigo es el que usted configuro previamente, una vez que termine de poner el mensaje, guarde el archivo

```Bash
git commit -a 
```

3. Envia los cambios al repositorio remoto
```Bash
git push origin main
```

## ¿Cómo actualizo los cambios que se hagan en el respositorio remoto en mi repositorio local?


Para poder traer los cambios que se hicieron en el repositorio remoto a tu repositorio local es necesario el siguiente comando:
```Bash
git pull origin main
```