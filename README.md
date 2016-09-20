University Sensiolabs - Reminder
================================

### What is the attribute in the definition of a route setting the locale of a user?
_locale

***

### When declaring a route in PHP, what is the 4th argument of the constructor of the Route class?
An array of options.
> http://symfony.com/doc/current/components/routing.html#defining-routes
>
> https://github.com/symfony/symfony/blob/master/src/Symfony/Component/Routing/Route.php#L75-L82

***

### How to get the current route name from Twig?
{{ app.request.attributes._route }}

***

### Assuming that the validate() method detects no violations, what will the Response object contain?
```php
// Controller/BookController.php
public function indexAction(
{
    $book = new Book();
    $validator = $this->get('validator');
    $errors = $validator->validate($book);
    return new Response((string) $errors);
}
```
An empty string
> https://github.com/symfony/symfony/blob/master/src/Symfony/Component/Validator/ConstraintViolationList.php#L38-L52

***

### Which of the followings are not validation constraints?
- ~~Password~~ (UserPassword)
- File
- ~~Search~~
- All

> http://symfony.com/doc/current/reference/constraints.html

***

### What will be the output of the following code?
```php
class Foo {
    public $value = 42;
    public function &getValue() {
        return $this->value;
    }
}
$foo = new Foo;
$myValue = &$foo->getValue();
$foo->value = 2;

echo $myValue;
```
2
> http://php.net/manual/en/language.references.php
>
> http://php.net/manual/fr/language.references.return.php

***

### What are the valid ways to get the Session object if the controller class inherits from the base FrameworkBundle's Controller class?
- ~~$session = $this->getSession();~~
- $session = $request->getSession();
- ~~$session = $this->getUser()->getSession();~~
- ~~$session = $this->container->getSession();~~
- $session = $this->get('session');
 
> http://symfony.com/doc/current/book/controller.html#managing-the-session
>
> http://symfony.com/doc/current/service_container/third_party.html

***

### Which Dumper is not available in the VarDumper component?
- HtmlDumper
- ~~HttpDumper~~
- CliDumper

> http://symfony.com/doc/current/components/var_dumper/advanced.html#dumpers

***

### What is the aim of the security switch_user option?
- ~~To be able to have several accounts and switch easily.~~
- To let some user be able to switch from to another.
- ~~To change the roles of the user easily.~~

> http://symfony.com/doc/current/security/impersonating_user.html

***

### Can interfaces define constants in PHP?
Yes

***

### What is the config option of web_profiler to display a debug page of a RedirectResponse?
intercept_redirects: true
> http://symfony.com/doc/current/reference/configuration/web_profiler.html#full-default-configuration
> 
> http://symfony.com/doc/current/cookbook/email/dev_environment.html#viewing-from-the-web-debug-toolbar

***

### What will be the output of the following code?
```php
<?php
echo count(explode ('/', '///'));
```
4
> http://php.net/manual/en/function.explode.php

*** 

### How can you get a random value of the following array?
```php
$tab = array('foo', 'key' => 'bar', 'baz', 36);
```
- ~~array_rand(array_flip($tab))~~
- ~~array_shuffle($tab)~~
- $tab[array_rand($tab)]
- ~~$tab[shuffle($tab)]~~
- ~~array_rand($tab)~~

> http://php.net/manual/en/function.array-flip.php
>
> http://php.net/manual/en/function.array-rand.php
>
> http://php.net/manual/en/function.shuffle.php

***

### Which of theses are the way to add the Cache-Control: public,s-maxage=900 HTTP response header on a Symfony\Component\HttpFoundation\Response object?
$response->setSharedMaxAge(900);
> http://symfony.com/doc/current/book/http_cache.html#expiration-with-the-cache-control-header
> 
> http://symfony.com/doc/current/http_cache/expiration.html
>
> https://github.com/symfony/symfony/blob/master/src/Symfony/Component/HttpFoundation/Response.php#L771-L802

***

### When is executed the Symfony\Component\Console\Command::interact method?
- ~~Before Symfony\Component\Console\Command::initialize method.~~
- Before the InputDefinition is validated.
- After Symfony\Component\Console\Command::initialize method.
- ~~After the InputDefinition is validated.~~
- Before Symfony\Component\Console\Command::execute method.
- ~~After Symfony\Component\Console\Command::execute method.~~

The InputDefinition is bound first, and its validation starts after Symfony\Component\Console\Command::interact
> http://symfony.com/doc/current/console.html#command-lifecycle
> 
> https://github.com/symfony/symfony/blob/master/src/Symfony/Component/Console/Command/Command.php#L212-L259

***

### Does the order of the controller arguments matter when mapping route parameters to controller arguments?
No
> http://symfony.com/doc/current/controller.html#the-request-object-as-a-controller-argument

***

### How to get information on the route foobar of an application?
- bin/console debug:router foobar
- ~~bin/check.php foobar~~
- ~~It is not possible to do this.~~
- ~~bin/console router:debug foobar~~
- ~~bin/debug.php foobar~~

> http://symfony.com/doc/current/routing/debug.html

***

### Following best practices, where should be stored a Bundle documentation?
Acme/Bundle/DemoBundle/Resources/doc/
> http://symfony.com/doc/current/bundles/best_practices.html#documentation

***

### Considering the following in a template: {{ path('home') }}
```twig
With the following declaration of route:
      <routes>
          <route id="home" path="/" schemes="https">
              <default key="_controller">AppBundle:Main:home</default>
          </route>
      </routes>
```
### What is displayed if the current scheme is http?
https://domain.name/
> http://symfony.com/doc/current/templating.html#linking-to-pages

***

### How can you add an option named my_option without setting a default value?
$resolver->setDefined('my_option');
> http://symfony.com/doc/current/components/options_resolver.html#options-without-default-values

***

### What will be the output of the following script?
```php
<?php
$a = array('foo', 'bar' => 'baz', array('foobar', 'baz'));
echo count($a, true);
```
5
> http://php.net/manual/en/function.count.php

***

### What is the output of the following controller?
```php
class HelloController
{
    public function helloAction()
    {
        $filename = tempnam(sys_get_temp_dir(), 'sf');
        file_put_contents($filename, 'hello {{ 1 + 1 }}');

        return $this->forward('FrameworkBundle:Template:template', [
            'template' => $filename
        ]);
    }
}
```
hello 2
> http://symfony.com/doc/current/cookbook/templating/render_without_controller.html
> 
> https://github.com/symfony/symfony/blob/master/src/Symfony/Bundle/FrameworkBundle/Controller/TemplateController.php#L27-L57
>
> http://php.net/tempnam

***

### What is the way to enable magic __call method?
```php
$accessor = PropertyAccess::createPropertyAccessorBuilder()
    ->enableMagicCall()
    ->getPropertyAccessor()
;
```
> http://symfony.com/doc/current/components/property_access/introduction.html#magic-call-method

***

### Which of these are Standard (not Long Term Support) Versions of Symfony?
- 3.2
- 3.3
- 3.1
- 3.4
- 3.0

> http://symfony.com/doc/current/contributing/community/releases.html#standard-versions
> 
> http://symfony.com/doc/current/contributing/community/releases.html#long-term-support-versions

***

### What does the 308 HTTP status code stand for?
Permanent redirect
> https://www.wikiwand.com/fr/Liste_des_codes_HTTP#/Redirection

*** 

### What is returned by $dispatcher->dispatch('bar.event', $event) in the following code?
```php
$event = new OrderPlacedEvent($order);
$dispatcher->dispatch('bar.event', $event);
```
$event
> http://symfony.com/doc/2.3/components/event_dispatcher/introduction.html#dispatcher-shortcuts

***

### In which cases the following call will return true
```php
$resolver->isDefined('username');
```
- $resolver->setDefined('username');
- $resolver->setRequired('username');
- $resolver->setDefined(array('username'));
- ~~$resolver->setDefault('username');~~

> http://symfony.com/doc/current/components/options_resolver.html#options-without-default-values

***

### Which method must implement a TranslationLoader that implements Symfony\Component\Translation\Loader\LoaderInterface?
public function load($resource, $locale, $domain = 'messages');
> http://symfony.com/doc/current/components/translation/custom_formats.html

***

### Can you configure your routes in PHP?
Yes
> http://symfony.com/doc/current/routing.html#routing-examples

*** 

### What does the affirmative strategy of AccessDecisionManager?
- ~~Grant access if there are more voters granting access than there are denying.~~ (consensus)
- Grant access as soon as there is one voter granting access.
- ~~Only grant access if none of the voters has denied access.~~ (unanimous)

> http://symfony.com/doc/current/components/security/authorization.html#access-decision-manager

***

### Considering the following declaration of route in YAML:
```yaml
contact:
    path:     /contact
    defaults: { _controller: AppBundle:Default:test }
    condition: "context.getMethod() in ['GET', 'HEAD'] and request.headers.get('User-Agent') matches '/firefox/i'"
```
### If the user tries to display the page by typing http://domain.name/contact with his regular Chrome browser, does he/she will have a 404 response?
Yes
> http://symfony.com/doc/2.6/book/routing.html#completely-customized-route-matching-with-conditions

***

### Is the translation activated by default?
No
> http://symfony.com/doc/current/book/translation.html#configuration

***

### How can you disable the validation in a form?
- ~~With the no_validation option set to true~~
- ~~By calling isValid(false)~~
- ~~By not calling isValid()~~
- With the validation_groups option set to false

> http://symfony.com/doc/current/form/disabling_validation.html

***

### Which type does not correspond to a button?
- reset
- button
- ~~input~~
- submit
 
***

### What is the default domain for form label?
messages
> http://symfony.com/doc/current/reference/forms/types/form.html#translation-domain

***

### Which of theses are not options available in every FormType?
- by_reference
- trim
- compound
- ~~attributes~~
- action
- ~~is_required~~ (required)

> http://symfony.com/doc/current/reference/forms/types/form.html

***

### What are the ways to retrieve the Request in an action?
- Add a type-hinted argument, object of type Request, to the action.
- ~~Add the @Request annotation on the action.~~
- ~~Get the service request via the Container.~~
```php
$this->get('request');
```
- Via a call to the request_stack service:
```php
$this->get('request_stack')->getCurrentRequest();
```
- ~~Via a call to the routing service:~~
```php
$this->get('router')->getRequest();
```

> http://symfony.com/doc/current/book/controller.html#the-request-object-as-a-controller-argument
> 
> http://symfony.com/doc/master/service_container/request.html

***

### What two caching models define the HTTP specification?
- Validation model
- ~~Confirmation model~~
- Expiration model
- ~~Invalidation model~~

> https://www.w3.org/Protocols/rfc2616/rfc2616-sec13.html

***

### Is it possible to pass a Response instance to the Symfony\Bundle\FrameworkBundle\Controller\Controller::render() method?
Yes

***

### Is the following code valid?
```php
<?php
class Article
{
    public string $title;
}
```
No - __Note:__ there is a pending RFC to add this feature to future PHP versions. See details :
> http://php.net/manual/en/language.oop5.properties.php

***

### What will be the last version of Symfony 3?
3.4
> http://symfony.com/roadmap?version=3.8#checker

***

### Among the following which ones are escaped?
- {{ var|raw|upper }}
- ~~{{ var|upper|raw }}~~
- {{ var|raw~bar }}

__Note:__ raw must be used before the other filters
> http://twig.sensiolabs.org/doc/filters/raw.html

***

### How can you get the HTTP client user-agent?
$_SERVER['HTTP_USER_AGENT'];
> http://php.net/manual/en/reserved.variables.server.php

*** 

### Which of the following are Filesystem methods?
- remove
- ~~move~~
- makePathRelative
- isAbsolutePath
- exists
- symlink

> http://symfony.com/doc/current/components/filesystem/introduction.html#usage
> 
> https://github.com/symfony/symfony/blob/master/src/Symfony/Component/Filesystem/Filesystem.php

***

### Which of the following will not be correctly encoded by the JSON extension?
- array(array("foo"=>"bar"))
- 'foo bar'
- ~~function () {alert("foo");}~~
- new SomeClass('some string')

> http://php.net/manual/en/book.json.php

*** 

### What will be the output of the following code?
```php
$a = (object) ["a" => "b"]; 
$b = (object) ["a" => "c"]; 
echo $a <=> $b;
```
- ~~0~~
- ~~1~~
- -1

> http://php.net/manual/en/language.operators.comparison.php
> 
> http://stackoverflow.com/questions/30365346/what-is-the-spaceship-operator-in-php-7#answer-30365399

*** 

### What is the first argument of the Symfony\Component\Config\FileLocator::locate method?
The name of the file to look for.
> http://symfony.com/doc/current/components/config/resources.html#locating-resources

***


