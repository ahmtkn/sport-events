
# Sport Events

Geliştirdiğimiz projede spor etkinliklerinin aktif bir şekilde paylaşılarak. Hangi tarihte, hangi bölgede ne tür etkinlikler var bunun bilgisinin alındığı; paylaşıldığı bir websitesidir.



## Özellikler

- Kullanıcı Dostu
- Canlı Renkler
- Esnek Filtreleme
- Admin Panel

  
## Kullanılan Teknolojiler

**İstemci:** Javascript, Jquery, Html, Css, Boostrap

**Sunucu:** PHP, Laravel

**Database:** MySql

**Sanalaştırma:** Docker

  
## Yükleme 

Projeyi ilk olarak clonlamamız ve sanalaştırma için makinamıza Docker kurmamız gerekmektedir.

Projeyi klonlayın

```bash
  git clone https://github.com/ahmtkn/sport-events.git
```


Docker Kurulumundan sonra oluşturmuş olduğumuz imageleri containerlara çevirmek için docker uygulamasını başlatıp daha sonra terminalden proje dizinine girip aşağıda verilen adımları yapmamız lazım.
```bash 
  cd /docker
  docker-compose up -d
```
Bu işlemden sonra containerlarımızın oluşturulmuş olması lazım.

Daha sonra proje dizininde terminale:
```bash 
  docker ps
```
Kodunu yazarak aktif çalışan containerlarımızı görmüş olacağız.

Daha sonrasında bağımlılıklarımızı kurmak için sport-events_php containerının içine girmemiz lazım bunun içinde terminale aşağıdaki kodu uygulamamız lazım.

```bash 
  docker exec -it "CONTAINER_ID" bash
```
Artık containerın içindeyiz. Bundan sonraki adımda; 

.env.example dosyasını kopyalayıp .env olarak değiştirmemiz gerekmektedir.

Daha sonra env dosyasında database congif bilgilerini güncelledikten sonra terminalden proje dizininin içinde şu kodu yazmamız gerekmektedir.

```bash 
  composer install
```
Böylelikle bağımlılıklarımız kurulmuş olacaktır.

Daha sonrasında sırayla aşağıdaki kodu terminale yazmamız gerekmektedir
```bash 
  php artisan key:generate
  php artisan optimize:clear
  php artisan migrate:fresh --seed
  php artisan storage:link
```

Projemiz ayağa kalkmış bulunmaktadır.

Docker Desktop uygulamasından nginx containerında open in web diyerek projemizi tarayıcıda açmış olacağız.
## API Kullanımı

#### Permission

```http
  GET /api/v1/permissions
```

```http
  POST /api/v1/permissions
```

```http
  PUT /api/v1/permissions
```

```http
  DELETE /api/v1/permissions
```

#### Permission getir

```http
  GET /api/v1/permissions/${permission}
```
#### Permission Güncelle

```http
  PUT /api/v1/permissions/${permission}
```
#### Permission Sil

```http
  Delete /api/v1/permissions/${permission}
```
| Parametre | Tip     |
| :-------- | :------- |
| `permission`      | `Permission` |


#### Roles

```http
  GET /api/v1/roles
```

```http
  POST /api/v1/roles
```

```http
  PUT /api/v1/roles
```

```http
  DELETE /api/v1/roles
```

#### Role getir

```http
  GET /api/v1/roles/${role}
```
#### Role Güncelle

```http
  PUT /api/v1/roles/${role}
```
#### Role Sil

```http
  Delete /api/v1/roles/${role}
```
| Parametre | Tip     | 
| :-------- | :------- | 
| `role`      | `Role` |



#### Users

```http
  GET /api/v1/users
```

```http
  POST /api/v1/users
```

```http
  PUT /api/v1/users
```

```http
  DELETE /api/v1/users
```

#### User getir

```http
  GET /api/v1/users/${user}
```
#### User Güncelle

```http
  PUT /api/v1/users/${user}
```
#### User Sil

```http
  Delete /api/v1/users/${user}
```
| Parametre | Tip     | 
| :-------- | :------- |
| `user`      | `User` |

  

#### Sports

```http
  GET /api/v1/sports
```

```http
  POST /api/v1/sports
```

```http
  PUT /api/v1/sports
```

```http
  DELETE /api/v1/sports
```

#### Sport getir

```http
  GET /api/v1/sports/${sport}
```
#### Sport Güncelle

```http
  PUT /api/v1/sports/${sport}
```
#### Sport Sil

```http
  Delete /api/v1/sports/${sport}
```
| Parametre | Tip     | 
| :-------- | :------- |
| `sport`      | `Sport` |

 
#### Regions

```http
  GET /api/v1/regions
```

```http
  POST /api/v1/regions
```

```http
  PUT /api/v1/regions
```

```http
  DELETE /api/v1/regions
```

#### Region getir

```http
  GET /api/v1/regions/${region}
```
#### Region Güncelle

```http
  PUT /api/v1/regions/${region}
```
#### Region Sil

```http
  Delete /api/v1/regions/${region}
```
| Parametre | Tip     | 
| :-------- | :------- |
| `region`      | `Region` |
  
#### Charities

```http
  GET /api/v1/charities
```

```http
  POST /api/v1/charities
```

```http
  PUT /api/v1/charities
```

```http
  DELETE /api/v1/charities
```

#### Charity getir

```http
  GET /api/v1/charities/${charity}
```
#### Charity Güncelle

```http
  PUT /api/v1/charities/${charity}
```
#### Charity Sil

```http
  Delete /api/v1/charities/${charity}
```
| Parametre | Tip     | 
| :-------- | :------- |
| `charity`      | `Charity` |
   
#### Events

```http
  GET /api/v1/events
```

```http
  POST /api/v1/events
```

```http
  PUT /api/v1/events
```

```http
  DELETE /api/v1/events
```

#### Event getir

```http
  GET /api/v1/events/${event}
```
#### Event Güncelle

```http
  PUT /api/v1/events/${event}
```
#### Event Sil

```http
  Delete /api/v1/events/${event}
```
#### Event Medya

```http
  POST /api/v1/events/media
```
| Parametre | Tip     | 
| :-------- | :------- |
| `event`      | `Event` |
   
#### Posts

```http
  GET /api/v1/posts
```

```http
  POST /api/v1/posts
```

```http
  PUT /api/v1/posts
```

```http
  DELETE /api/v1/posts
```

#### Post getir

```http
  GET /api/v1/posts/${post}
```
#### Post Güncelle

```http
  PUT /api/v1/posts/${post}
```
#### Post Sil

```http
  Delete /api/v1/posts/${post}
```
#### Post Medya

```http
  POST /api/v1/posts/media
```
| Parametre | Tip     | 
| :-------- | :------- |
| `post`      | `Post` |
 
## Yazarlar ve Teşekkür

- Ahmet TEKİN back-end geliştirme için.
- Metehan SÖZEN front-end geliştirme için.
- Tuhanan YAZKAN front-end geliştirme için.
- Rabia GÜNEŞ front-end geliştirme için.

  