
## About this application

This is a Demonstration of the retrieval of data from a webservice, which is stored encrypted in a mariadb.

This data then is displayed in a simple laravel-app.

## How to setup in docker.

First create the laravel-container.
```
cd QuotesDemo
docker\docker-build.cmd
``` 
Then start the laravel and a mariadb-container

```
docker\startup.cmd
```

If your containers are running, point your browser to (http://localhost:8081).
Please login now with the following credentials ```name@email.de:password```.

After successfull login, you will be directed to a page, where the quotes are displayed.

The (Architecture-Diagram)[https://github.com/x-mago/QuotesDemo/blob/main/resources/misc/Quotes Architektur.pdf]

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
