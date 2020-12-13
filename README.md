# Жива Мрежа (zhiva.be)

Включва

* Аз - Keycloak сървър който чрез OpenID Connect свързва всички услуги под покрива на Жива Мрежа
* Седмичник - phpList сървър който ползваме да пращаме седмичник

За самия сайт [zhiva.be](zhiva.be), виж [zhiva-mrezha.github.io](https://github.com/zhiva-mrezha/zhiva-mrezha.github.io), защото се хосва в Github Pages.

## Разработка

Активиай Python `virtualenv`, после:

```
pip install -r requirements.txt
pre-commit install
```

После използвайки `ansible/playbook.sh` и `ansible/certificate.sh` може да постигнеш всичко.
