# Apa itu indexing dalam sql
poin utama dari indexing adalah untuk mengquery data dengan cepat

sql akan menyimpan "key" dari suatu table dalam map pada binary tree, lalu key tersebut akan digunakan sebagai index dalam mencari sebuah data

## cara membuat index dalam mysql
- menggunakan syntax primary key
```sql
create table data_diri (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
  nama varchar(50) NOT NULL,
  asal varchar(50)NOT NULL,
  umur INT NOT NULL,
  jenis_kelamin char(1) NOT NULL,
  ranking INT NOT NULL
);
```
primary key akan menjadi index dalam sql

- menambah index
```sql
create index rank
on data_diri(ranking)
```
penambahan index dilakukan bila ada kolom lain yang sering pakai sebagai key dalam pencarian data

## hasil table
|  id | nama  |  asal | umur  |  jenis_kelamin | ranking|
|---|---|---|---|---|---|
|  1 |  Marcell |  bekasi |  19 |  L |9|
|  2 | Ian  |  Bekasi | 19  | L |12|
