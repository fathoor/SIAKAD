# <p align="center">IS184412 - Rancang Bangun Perangkat Lunak [C]</p>
<p align="center">Dosen Pengampu<br><i><strong>Radityo Prasetianto Wibowo, S.Kom., M.Kom.</strong></i></p><br>

<p align="center"><img href="https://github.com/fathoor/SIAKAD" src="/public/img/siakad_logo_putih.svg" width="720"></p>

## <p align="center">Sistem Informasi Akademik</p>

<p align="center">Website <strong>Sistem Informasi Akademik</strong> yang dibuat oleh <strong>Kelompok 1</strong> sebagai proyek <i>tugas akhir</i> dari mata kuliah <code>Rancang Bangun Perangkat Lunak [C]</code></p>

***

### <p align="center">Available on Heroku!</p>
<p align="center"><strong>SIAKAD ITS</strong> is available at https://siakadits.herokuapp.com/</p>

[![Website Preview](/public/img/siakad_login.png)](https://siakadits.herokuapp.com/)

***

## Authors
| No | NRP | Nama |
| :---: | :---: | --- |
| 1 | 5026201007  | Faraz Nurdini |
| 2 | 5026201045  | Theodorus Revonsio Prananta |
| 3 | 5026201054  | Ernando Taufiq Nur Hidayat |
| 4 | 5026201068  | Cecilia Melva Natania |
| 5 | 5026201091  | Aliyya Zahra Nurulhusna |
| 6 | 5026201096  | Bonaventura Daiva Putra |
| 7 | 5026201109  | Alana Nabihah Thufailah |
| 8 | 5026201115  | Benediktus Pandu Budhiwicaksono |
| 9 | 5026201130  | Ellion Blessan |
| 10 | 5026201139  | Muhammad Fathurrahman |
| 11 | 5026201141  | Abraham Mauritz Talakua |

## Documents
1. [Requirement & Design](./DokumenLaporan/Requirements%20&%20Design.pdf)
2. [Test Plan & Results](./DokumenLaporan/Test%20Plan.xlsx)
3. [User Manual](./DokumenLaporan/User%20Manual.pdf)

***

## Prerequisites
- **PHP** `8.1.5` or above, get it from [here](https://www.apachefriends.org/download.html)
- **Laravel** `9.2` or above
- **MySQL**, or any other database platform
> **Composer** `2.3.5` or above is also required alongside **Laravel**, get it from [here](https://getcomposer.org/download/)

## Installation
### Repository
- Clone latest repository
```
git clone https://github.com/fathoor/SIAKAD.git
```

### Deployment Script
A `bash` script is provided to automate the deployment process below, you can run the `deploy.sh` script
- On **Windows**, using `Git Bash` or any other `bash` shell
```bash
bash ./deploy.sh
```
- On **Linux**, using terminal
```bash
./deploy.sh
```
> If the script is not yet executable, do `chmod +x ./deploy.sh` to set it as an executable file
<details><summary>Expand <code>deploy.sh</code></summary>
<p>

```bash
#!/bin/bash

echo "
----------------------------------
Rancang Bangun Perangkat Lunak [C]
  Sistem Informasi Akademik ITS
          Kelompok 1
----------------------------------
"

# Generate Environment
if [ ! -f .env ]; then
echo "----------------------------------
Generating environment...
----------------------------------
"
cp .env.example .env
echo " .env generated!"
fi

# Maintenance Mode
echo "
----------------------------------
Turning on maintenance mode...
----------------------------------
"
php artisan down

# Update Source Code
echo "
----------------------------------
Updating source code...
----------------------------------
"
git pull

# Install Dependencies
echo "
----------------------------------
Installing dependencies...
----------------------------------
"
composer install --no-interaction --no-dev --prefer-dist --optimize-autoloader

# Creating siakad Database
echo "
----------------------------------
Creating 'siakad' database...
----------------------------------
"
php artisan database:create
echo " siakad database created!"

# Migrate & Seed Database
echo "
----------------------------------
Migrating database...
----------------------------------
"
php artisan migrate:fresh --seed --force

# Generate Application Key
echo "
----------------------------------
Generating application key...
----------------------------------
"
php artisan key:generate

# Clear Cache
echo "
----------------------------------
Clearing cache...
----------------------------------
"
php artisan cache:clear
php artisan config:cache

# Live Mode
echo "
----------------------------------
Turning off maintenance mode...
----------------------------------
"
php artisan up

# Deploy Server
echo "
----------------------------------
Deploying server...
----------------------------------
"
php artisan serve
```

</p>
</details>

### Build Application
- Generate new `.env` environment
```
cp .env.example .env
```
- Install dependencies
```
composer install --no-interaction --no-dev --prefer-dist --optimize-autoloader
```
- Generate new `APP_KEY` application key
```
php artisan key:generate
```
- Clear application cache

```
php artisan cache:clear
```
- Cache application configuration

```
php artisan config:cache
```

### Database
- Create `siakad` database
```
php artisan database:create
```
- Migrate and seed database
```
php artisan migrate:fresh --seed --force
```

### Deployment
- Deploy local development server
```
php artisan serve
```
> By default, local server will be deployed on `localhost:8000`

***

<p align="center"><i>This repository is only for educational purpose, as I will use this only to upload my assignments for this particular class.</i></p>
