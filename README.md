
# Desafío Bsale_backend

<h2>Explicación del Desafío Backend </h2>
<p>
  El Desafío backend consite en realizar una conexión a una base de datos MYSQL y obtener las categorías y la información de los productos, posteriormente realizar una API que disponga esta información a cualquier aplicación frontend para su uso.
 </p>
 
 # Intrucciones
<ul>
  <li>Descargar repositorio</li>
  <li>Subir archivos a servidor</li>
</ul> 
La aplicación de front-backend es desarrollada en utilizando las siguientes tecnologías:<br>

<ul>
  <li>PHP</li>
  <li>MYSQL</li>
</ul> 

# Archivo db.php:
Se crea la clase DB, la cual realiza la conexión con la base de datos utilizando el siguiente método:<br>
<h3>connect()</h3>

![image](https://user-images.githubusercontent.com/70005501/202604704-f6c4076b-2cfc-4a83-87a1-0ae90899c3ad.png)


# Archivo product.php:
Se crea la clase Product, la cual se interactua con la base de datos  para obtener la lista de productos segun dependa el caso, ademas de depender de la clase db.php<br>
<h3>getProducts()</h3>

![image](https://user-images.githubusercontent.com/70005501/201353654-203f6623-0cbe-4850-bd7a-0615560b7255.png)
<p> Función que permite obtener todos los productos desde la base de datos   </p>

<h3>getProductsbyCategory($category)</h3> 

![image](https://user-images.githubusercontent.com/70005501/201352155-8643190e-a590-4c5e-9442-7cc72213c0f5.png)
<p>Función que permite obtener los productos por categoría</p>


<h3> getProductsbyName($name) </h3>
 
![image](https://user-images.githubusercontent.com/70005501/201352268-e276376e-5bf0-4163-9082-eecf91e7ce1b.png)
<p>Función que permite obtener los productos por el nombre ingresado por el usuario </p>

# Archivo categoria.php:<br>
Se crea la clase Category, la cual se interactua con la base de datos para obtener la lista de categorias, ademas de depender de la clase db.php<br>
<h3>getCategories()</h3> 

![image](https://user-images.githubusercontent.com/70005501/201352653-e71f38e0-e5e3-4320-95c4-5b6b8a2a5db7.png)
<p> función que permite obtener todas las categorías desde la base de datos </p>

# Archivo apistore.php:<br>
Se crea la clase apistore, la cual se interactua con las clases anteriormente creadas y las clases que reciben la solicitud para obtener la información<br>

<h3>getAllCategories()</h3> 

![image](https://user-images.githubusercontent.com/70005501/201354469-31553d2d-4ff7-48dc-b4e7-8d318b8e2530.png)
<p> función que permite obtener todas las categorías desde la clase categoria.php y retorna un json con la información solicitada </p>


<h3>getAllProducts()</h3> 

![image](https://user-images.githubusercontent.com/70005501/201354715-e8048bc4-31dd-4593-a3a2-77d343940a14.png)
<p> función que permite obtener todos los productos desde la clase product.php y retorna un json con la información solicitada </p>

<h3>getProductsByCategoryAPI($categoryid)</h3> 

![image](https://user-images.githubusercontent.com/70005501/201355113-ef479214-fb50-4362-87dc-c88ceb12552a.png)
<p> función que permite obtener los productos filtrados por categoría desde la clase product.php y retorna un json con la información solicitada </p>


<h3>getProductsByNameAPI($name)</h3> 

![image](https://user-images.githubusercontent.com/70005501/201355203-28d63a6a-6e05-4bcd-9fbd-888ca6bccd21.png)
<p> función que permite obtener los productos filtrados por nombre desde la clase product.php y retorna un json con la información solicitada </p>



# Archivo categoryApi.php:<br>
Se crea la clase categoryApi, la cual se interactua con la solicitud recibida desde el front-end y busca la informacion en apistore.php,
se realiza un case, dependiendo el method recibido desde el front <br>

<h3>GET</h3> 

![image](https://user-images.githubusercontent.com/70005501/201356837-a92c977e-d9bb-437f-8cf0-bf3fb49ac53a.png)

<p> Valida si existe como parámetro el categoryid en caso de que existe filtra los productos por categoría, en caso contrario obtiene todas las categorías</p>

# Archivo productApi.php:<br>
Se crea la clase productApi, la cual se interactua con la solicitud recibida desde el front-end y busca la informacion en apistore.php,
se realiza un case, dependiendo el method recibido desde el front <br>

<h3>GET</h3> 

![image](https://user-images.githubusercontent.com/70005501/201356046-3986d67a-4c00-49db-82c9-ea676cbd339c.png)

<p> Valida si existe como parámetro el nombre en caso que exista filtra los productos por nombre, en caso contrario, muestra todos los prodcutos</p>

