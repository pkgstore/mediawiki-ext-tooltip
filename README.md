# Information

Всплывающее информационное сообщение напротив определённого слова. Расшифровка аббревиатур.

## Install

1. Загрузите папки и файлы в директорию `extensions/MW_EXT_Tooltip`.
2. В самый низ файла `LocalSettings.php` добавьте строку:

```php
wfLoadExtension( 'MW_EXT_Tooltip' );
```

## Syntax

```html
{{#tooltip: [WORD]|[TOOLTIP]}}
```
