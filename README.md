# curso22 

## Associar editores de texto ao Git

```
 git config --global core.editor "vim"
```


## Mudar saida comandos Gitgit 

```
 git config --global core.pager cat
```


## Associar editores de texto ao Ubuntu

```
 sudo update-alternatives --config editor
```

Selecionar a opção (número) conforme desejado:

```
    There are 5 alternatives which provide `editor’.
    Selection Alternative
    ———————————————–
    1 /usr/bin/vim
    2 /bin/ed
    *+ 3 /bin/nano
    4 /usr/bin/vim.basic
    5 /usr/bin/vim.tiny
    Press enter to keep the default[*], or type selection number:
```


## Instalar PHP7.4 

```PHP
sudo apt-get install -y php7.4-cli php7.4-dev php7.4-pgsql php7.4-sqlite3 php7.4-gd php7.4-curl php7.4-imap php7.4-mysql php7.4-mbstring php7.4-xml php7.4-zip php7.4-bcmath php7.4-soap php7.4-intl php7.4-readline php7.4-common php7.4-pspell php7.4-tidy php7.4-xmlrpc php7.4-xsl php7.4-opcache php-curl php7.4-gd php7.4-mbstring php7.4-xml php7.4-xmlrpc php7.4-soap php7.4-intl php7.4-zip php7.4-fpm php7.4-json php-pear php-memcached php-imagick php-apcu php-xdebug php libapache2-mod-php
```


## Hosts (C:\Windows\System32\drivers\etc\hosts)

```TEXT
#
#127.0.0.1 localhost
#::1 localhost

127.0.0.1 localhost
127.0.0.1 laravel.investment

::1 localhost
::1 laravel.investment
```


## Virtual Hosts (Apache)

```XML
<VirtualHost *:80>
  ServerName localhost
  ServerAlias localhost
  DocumentRoot "${INSTALL_DIR}/www"
  <Directory "${INSTALL_DIR}/www/">
    Options +Indexes +Includes +FollowSymLinks +MultiViews
    AllowOverride All
    Require all granted
  </Directory>
</VirtualHost>

<VirtualHost *:80>
  ServerName laravel.investment
  ServerAlias laravel.investment
  DocumentRoot "${INSTALL_DIR}/www/laravel/investment/public"
  <Directory "${INSTALL_DIR}/www/laravel/investment/public/">
    Options +Indexes +Includes +FollowSymLinks +MultiViews
    AllowOverride All
    Require all granted
  </Directory>
</VirtualHost>
```


## XDebug


XDebug.ini

sudo vim /etc/php/7.4/mods-available/xdebug.ini

> Verificar versão **20190902** em */usr/lib/php*

```
zend_extension=/usr/lib/php/20190902/xdebug.so
xdebug.remote_autostart = 1
xdebug.remote_enable = 1
xdebug.remote_handler = dbgp
xdebug.remote_host = 127.0.0.1
xdebug.remote_log = /tmp/xdebug_remote.log
xdebug.remote_mode = req
xdebug.remote_port = 9003
```

Config Json vscode
```JAVASCRIPT
{
	"version": "0.2.0",
	"configurations": [{
			"name": "Listen for XDebug",
			"type": "php",
			"request": "launch",
			"port": 9003,
			"xdebugSettings": {
				"max_children": 1500,
				"max_data": 9048
			},
			"pathMappings": {
				"/var/www/html": "/var/www/html",
			}
		},
		{
			"name": "Launch currently open script",
			"type": "php",
			"request": "launch",
			"program": "${file}",
			"cwd": "${fileDirname}",
			"port": 9003
		}
	]
}
```

## HotKeys VsCode (atalhos)

```JAVASCRIPT
// Place your key bindings in this file to override the defaultsauto[]
[
	{
		"key": "ctrl+alt+j",
		"command": "workbench.action.editor.nextChange",
		"when": "editorTextFocus"
	},
	{
		"key": "alt+f5",
		"command": "-workbench.action.editor.nextChange",
		"when": "editorTextFocus"
	},
	{
		"key": "alt+numpad_subtract",
		"command": "workbench.action.navigateBack"
	},
	{
		"key": "alt+numpad_add",
		"command": "workbench.action.navigateForward"
	},
	{
		"key": "ctrl+shift+-",
		"command": "-workbench.action.navigateForward"
	},
	{
		"key": "ctrl+m",
		"command": "-editor.action.toggleTabFocusMode"
	},
	{
		"key": "ctrl+m",
		"command": "workbench.action.gotoMethod"
	},
	{
		"key": "ctrl+shift+d",
		"command": "-workbench.view.debug"
	},
	{
		"key": "ctrl+shift+d",
		"command": "editor.action.addSelectionToNextFindMatch",
		"when": "editorFocus"
	},
	{
		"key": "ctrl+d",
		"command": "-editor.action.addSelectionToNextFindMatch",
		"when": "editorFocus"
	},
	{
		"key": "ctrl+d",
		"command": "editor.action.copyLinesDownAction",
		"when": "editorTextFocus && !editorReadonly"
	},
	{
		"key": "ctrl+shift+alt+down",
		"command": "-editor.action.copyLinesDownAction",
		"when": "editorTextFocus && !editorReadonly"
	},
	{
		"key": "ctrl+shift+v",
		"command": "-notebook.cell.pasteAbove",
		"when": "notebookEditorFocused && !inputFocus"
	},
	{
		"key": "ctrl+shift+v",
		"command": "clipboard.pasteFromClipboard",
		"when": "editorTextFocus"
	},
	{
		"key": "ctrl+shift+v",
		"command": "-clipboard.pasteFromClipboard",
		"when": "editorTextFocus"
	},
	{
		"key": "ctrl+shift+v",
		"command": "-workbench.action.terminal.paste",
		"when": "terminalFocus && terminalProcessSupported"
	},
	{
		"key": "ctrl+shift+numpad_subtract",
		"command": "search.action.collapseSearchResults"
	},
	{
		"key": "ctrl+shift+numpad_add",
		"command": "search.action.expandSearchResults"
	}
]
```



## Config VsCode (JSON_Settings)

```JAVASCRIPT
{
    "diffEditor.ignoreTrimWhitespace": false,
    "editor.renderWhitespace": "none",
    "explorer.confirmDelete": false,
    "gitlens.views.compare.location": "gitlens",
    "gitlens.views.fileHistory.location": "gitlens",
    "gitlens.views.lineHistory.location": "gitlens",
    "gitlens.views.repositories.location": "gitlens",
    "gitlens.views.search.location": "gitlens",
    "breadcrumbs.enabled": true,
    "editor.formatOnType": true,
    "editor.insertSpaces": false,
    "editor.minimap.enabled": true,
    "editor.minimap.showSlider": "always",
    "editor.renderControlCharacters": false,
    "editor.tabCompletion": "on",
    "editor.tabSize": 4,
    "extensions.ignoreRecommendations": true,
    "material-icon-theme.folders.theme": "classic",
    "php.validate.enable": true,
    "php.validate.executablePath": "/usr/bin/php",
    "php.validate.run": "onType",
    "intelephense.format.enable": false,
    "editor.rulers": [190],
    "window.openFoldersInNewWindow": "off",
    "window.restoreFullscreen": true,
    "workbench.editor.enablePreview": false,
    "workbench.iconTheme": "material-icon-theme",
    "workbench.startupEditor": "newUntitledFile",
    "editor.scrollbar.verticalScrollbarSize": 35,
    "editor.scrollbar.horizontalScrollbarSize": 15,
    "workbench.colorCustomizations": {
        "statusBar.foreground": "#d3cccc",
        "statusBar.debuggingForeground": "#000000",
        "statusBar.debuggingBackground": "#C6FF00",
        "editorRuler.foreground": "#ff4081",
        "minimap.selectionHighlight": "#ff00ea",
        "minimapSlider.hoverBackground": "#48f7bd6b",
        // Marcador codigo: Insert | update | delete
        // Ao lado do minimap
        "editorOverviewRuler.addedForeground": "#30ce30",
        "editorOverviewRuler.modifiedForeground": "#168ff2",
        "editorOverviewRuler.deletedForeground": "#f21616",
        // Left (junto ao Nº linhas)
        "editorGutter.addedBackground": "#30ce30",
        "editorGutter.modifiedBackground": "#dcf216",
        "editorGutter.deletedBackground": "#f21616"
    },
    "telemetry.enableTelemetry": false,
    "update.showReleaseNotes": false,
    "terminal.integrated.shell.linux": "/bin/zsh",
    "editor.fontFamily": "Fira Code",
    "editor.fontLigatures": true,
    "vscode-php-cs-fixer.fixOnSave": true,
    "vscode-php-cs-fixer.toolPath": "/var/www/html/php-fixer/vendor/bin/php-cs-fixer",
    "vscode-php-cs-fixer.config": "/var/www/html/php-fixer/.php_cs.dist",
    "vscode-php-cs-fixer.useCache": true,
    "[php]": {
        "editor.defaultFormatter": "fterrag.vscode-php-cs-fixer"
    },
    "files.exclude": {
        "**/.git": true,
        "**/.DS_Store": true,
        "**/.vscode": true,
        "**/.settings": true,
        "**/__pycache__": true,
        "**/.pytest_cache": true,
        "**/node_modules": true,
        "node_modules": true,
        "venv": true,
        "*.sublime-*": true,
        "env*": true,
        "**/.htmllintrc": true,
        "**/.gitignore": true,
        "**/.github": true,
        "**/.md": true,
        "**/.wsdl": true,
        "**/.jpeg/**": true,
        "**/.jpg/**": true,
        "**/.png/**": true,
        "**/.svg/**": true,
    },
    "search.exclude": {
        "**/.git": true,
        "**/node_modules": true,
        "**/bower_components": true,
        "**/env": true,
        "**/venv": true,
        "**/.wsdl": true,
        "**/.settings": true,
        "**/.jpeg": true,
        "**/.jpg": true,
        "**/.png": true,
        "**/.svg": true,
    },
    "files.watcherExclude": {
        "**/.git": true,
        "**/.git/objects/**": true,
        "**/.git/subtree-cache/**": true,
        "**/node_modules/**": true,
        "**/env/**": true,
        "**/venv/**": true,
        "env-*": true,
        "**/.wsdl": true,
        "**/.settings": true,
        "**/.jpeg": true,
        "**/.jpg": true,
        "**/.png": true,
        "**/.svg": true,
    },
    "intelephense.files.exclude": [
        "**/.git/**",
        "**/.svn/**",
        "**/.jpg/**",
        "**/.jpeg/**",
        "**/.png/**",
        "**/.hg/**",
        "**/CVS/**",
        "styles/**",
        "downloads/**",
        "icons/**",
        "images/**",
        "spikes/**",
        "libs/**",
        "help-content/**",
        ".DS_Store/**",
        "**/node_modules/**",
        "**/bower_components/**",
        "**/dist/**",
    ],
    "todo-tree.tree.showScanModeButton": false,
    "workbench.colorTheme": "Arvischain Theme",
    "editor.suggestSelection": "first",
    "vsintellicode.modify.editor.suggestSelection": "automaticallyOverrodeDefaultValue",
    "cSpell.language": "pt,pt-BR,en,en-GB,en-US",
    "cSpell.userWords": [
        "callout",
        "docview",
        "ecommerce",
        "entregas",
        "etiqueta",
        "imprimir",
        "skyhub",
        "uf",
        "xajax"
    ],
    "markdown.preview.breaks": true,
    "debug.javascript.breakOnConditionalError": true,
    "debug.allowBreakpointsEverywhere": true,
    "todo-tree.general.enableFileWatcher": true,
    "debug.showBreakpointsInOverviewRuler": true,
    "debug.openDebug": "openOnSessionStart"
}
```
