# <p  align="center"> IS184412 - Rancang Bangun Perangkat Lunak [C] </p>

<br><p  align="center"> [![SIAKAD ITS](/public/img/siakad_putih.png)](https://github.com/fathoor/SIAKAD)</p>

## <p  align="center"> Sistem Informasi Akademik </p>

Website **Sistem Informasi Akademik** yang dibuat oleh **Kelompok 1** sebagai proyek *Tugas Akhir* dari mata kuliah ```Rancang Bangun Perangkat Lunak [C]```

## Authors
1. 5026201007 - Faraz Nurdini
2. 5026201045 - Theodorus Revonso Prananta
3. 5026201054 - Ernando Taufiq Nur Hidayat
4. 5026201068 - Cecilia Melva Natania
5. 5026201091 - Aliyya Zahra Nurulhusna
6. 5026201096 - Bonaventura Daiva Putra
7. 5026201109 - Alana Nabihah Thufailah
8. 5026201115 - Benediktus Pandu Budhiwicaksana
9. 5026201130 - Ellion Blessan
10. 5026201139 - Muhammad Fathurrahman
11. 5026201141 - Abraham Mauritz Talakua

## Prerequisites
- **PHP** `8.1.5` or above, get it from [here](https://www.apachefriends.org/download.html)
- **Laravel** `9.2` or above
> **Composer** `2.3.5` or above is also required to build the webpage, get it from [here](https://getcomposer.org/download/)

## Installation
### Build the webpage
- Create new `.env`
```
cp .env.example .env
```
- Set new `APP_KEY`
```
php artisan key:generate
```
- Clear config cache

```
php artisan config:cache
```
- Install dependencies
```
composer install
```

### Run Laravel
- Start local server
```
php artisan serve
```

***

*This repository is only for educational purpose, as I will use this only to upload my assignments for this particular class.*
