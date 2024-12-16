
<h1 align="center" style="font-weight: bold;">API REPUBLIK MANTRI 💻</h1>

<p align="center">
<a href="#tech">Technologies</a>
<a href="#started">Getting Started</a>
<a href="#routes">API Endpoints</a>

 
</p>


<p align="center">Ini adalah project BackEnd berbasis RESTful API menggunakan framework Code Igniter 4, sebagai pemenuhan tugas kuliah MatKul REST API & Proyek Informatika</p>


<p align="center">
<a href="https://github.com/yogadewa0/klinik-api">📱 Visit this Project</a>
</p>

<h2 id="technologies">💻 Technologies</h2>

- Code Igniter 4
- Xampp
- MySql
- Fonnte
- Postman

<h2 id="started">🚀 Getting started</h2>

Pertama - tama anda bisa melakukan fork untuk menyimpan salinan repo ini di repo github anda atau anda bisa langsung melakukan clone untuk menyimpan repo ini secara local.

Kemudian anda bisa menjalankan migrasi dan seed, untuk mempersiapkan database yang akan digunakan, kemudian anda bisa menggunakan `php spark serve` untuk menjalankan server lokal yang akan menangani request dari postman.

Jangan lupa untuk menjalankan service MySql dan Apache pada XAMPP untuk handling databasenya.

<h3>Prerequisites</h3>

Here you list all prerequisites necessary for running your project. For example:

- [Code Igniter 4](https://www.codeigniter.com/user_guide/installation/index.html)
- [Fonnte](https://fonnte.com/)
- [XAMPP](https://www.apachefriends.org/download.html)
- [PostMan](https://www.postman.com/downloads/)

<h3>Cloning</h3>

How to clone your project

```bash
git clone https://github.com/yogadewa0/klinik-api.git
```

<h3>Starting</h3>

How to start your project

```bash
cd {your-clone-dir}
php spark serve
```

<h2 id="routes">📍 API Endpoints</h2>

Here you can list the main routes of your API, and what are their expected request bodies.
​
| route               | description                                          
|----------------------|-----------------------------------------------------
| <kbd>GET /authenticate</kbd>     | retrieves user info see [response details](#get-auth-detail)
| <kbd>POST /authenticate</kbd>     | authenticate user into the api see [request details](#post-auth-detail)

<h3 id="get-auth-detail">GET /authenticate</h3>

**RESPONSE**
```json
{
  "name": "Fernanda Kipper",
  "age": 20,
  "email": "her-email@gmail.com"
}
```

<h3 id="post-auth-detail">POST /authenticate</h3>

**REQUEST**
```json
{
  "username": "fernandakipper",
  "password": "4444444"
}
```

**RESPONSE**
```json
{
  "token": "OwoMRHsaQwyAgVoc3OXmL1JhMVUYXGGBbCTK0GBgiYitwQwjf0gVoBmkbuyy0pSi"
}
```

<h2 id="colab">🤝 Collaborators</h2>

<p>Special thank you for all people that contributed for this project.</p>
<table>
<tr>

<td align="center">
<a href="https://github.com/yogadewa0">
<img src="https://avatars.githubusercontent.com/u/60734671?v=4&size=64" width="100px;" alt="Dewa Yoga Profile Picture"/><br>
<sub>
<b>Dewa Yoga</b>
</sub>
</a>
</td>

</tr>
</table>