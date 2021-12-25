# Online library

# Цель работы
Разработать информационную систему "Онлайн библиотека"

# Описание системы
## Пользовательские роли
В системе предусмотрены три пользовательские роли:
 - Администратор - имеет возможность добавлять, удалять, редактировать профили пользователей и задавать им роли; добавлять, удалять и редактировать описание книг, имеет доступ к библиотеке.
 - Редактор - добавляет новые книги в базу, имеет возможность редактировать их описание, а также удалять из базы, имеет доступ к библиотеке.
- Пользователь - может редактировать описание своего профиля, имеет доступ к библиотеке.
## Пользовательские сценарии
### Пользователь 
При переходе на сайт, Пользователю необходимо зарегистрироваться. Для этого необходимо нажать кнопку `Register` в верхнем правом углу, а после ввести все необходимые данные. После успешной регистрации Пользователь может авторизоваться и полностью воспользоваться функционалом сайта - для этого нужно нажать кнопку `Login` в верхнем правом углу.

Чтобы перейти непосредственно в библиотеку, нужно нажать на кнопку `library` в правом верхнем углу. После этого на открывшейся странице выбрать понравившуюся книгу. После нажатия на кнопку `View` Пользователю в отдельном окне будет доступна книга для прочтения.

Чтобы перейти в профиль, нужно нажать на кнопку `Profile` в правом верхнем углу, после этого пользователю будут доступны для редактирования его данные. У Пользователя есть возможность сменить пароль, для этого необходимо нажать на кнопку Password change и заполнить все необходимые даннные

### Редактор
При переходе на сайт Редактору должны быть предоставлены логин и пароль администратором, введя необходимые данные, Редактор будет авторизирован. Редактор может добавить книгу в библиотеку, для этого необходимо нажать на кнопку `Add book` и заполнить необходимые даннные. Редактору доступна возможность редактировать описание уже добавленных книг, а также удалить книги из базы, для этого необходимо открыть список всех книг, нажатием на кнопку `Book list`. Кнопка `Edit` позволяет редактировать описание книг, а кнопка `Remove` удалит книгу из базы.

### Администратоор
Администратор получил логин и пароль на этапе создания базы данных. При входе на сайт он, как и редактор, может редактировать, удалять, добавлять книги. Администратору доступен весь список пользователей по кнопке `User list`. Администратор может редактировать профиль каждого пользователя и редактора, а также назначать им роли по кнопке `Edit`, заполнив соответсвующую форму. Администратор может удалить любого пользователя из базы, нажав на кнопку `Remove`.
# Компоненты системы
- Apache
- PHP 5.5.12
- MySQL 5.6.17
- JQuery 3.4.1
- Bootstrap 4.4.1
# Схема базы данных
![Безымянный](https://user-images.githubusercontent.com/82318593/147379958-b50fb4d1-628a-41a1-8cc9-2a07bbcbdaa5.png)
----
