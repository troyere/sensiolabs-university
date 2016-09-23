University Sensiolabs - Reminder
================================

### What is the attribute in the definition of a route setting the locale of a user?
Answer : _locale

***

### When declaring a route in PHP, what is the 4th argument of the constructor of the Route class?
Answer : An array of options.
> http://symfony.com/doc/current/components/routing.html#defining-routes
>
> https://github.com/symfony/symfony/blob/master/src/Symfony/Component/Routing/Route.php#L75-L82

***

### How to get the current route name from Twig?
Answer : 
```twig
{{ app.request.attributes._route }}
```

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
Answer : An empty string
> https://github.com/symfony/symfony/blob/master/src/Symfony/Component/Validator/ConstraintViolationList.php#L38-L52

***

### Which of the followings are not validation constraints?
Answer : 
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
Answer : 2
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
Answer : 
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
Answer : Yes

***

### What is the config option of web_profiler to display a debug page of a RedirectResponse?
Answer : 
```yaml
intercept_redirects: true
```
> http://symfony.com/doc/current/reference/configuration/web_profiler.html#full-default-configuration
> 
> http://symfony.com/doc/current/cookbook/email/dev_environment.html#viewing-from-the-web-debug-toolbar

***

### What will be the output of the following code?
```php
<?php
echo count(explode ('/', '///'));
```
Answer : 4
> http://php.net/manual/en/function.explode.php

*** 

### How can you get a random value of the following array?
```php
$tab = array('foo', 'key' => 'bar', 'baz', 36);
```
Answer : 
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
Answer : 
```php
$response->setSharedMaxAge(900);
```
> http://symfony.com/doc/current/book/http_cache.html#expiration-with-the-cache-control-header
> 
> http://symfony.com/doc/current/http_cache/expiration.html
>
> https://github.com/symfony/symfony/blob/master/src/Symfony/Component/HttpFoundation/Response.php#L771-L802

***

### When is executed the Symfony\Component\Console\Command::interact method?
Answer : 
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
Answer : No
> http://symfony.com/doc/current/controller.html#the-request-object-as-a-controller-argument

***

### How to get information on the route foobar of an application?
Answer : 
- bin/console debug:router foobar
- ~~bin/check.php foobar~~
- ~~It is not possible to do this.~~
- ~~bin/console router:debug foobar~~
- ~~bin/debug.php foobar~~

> http://symfony.com/doc/current/routing/debug.html

***

### Following best practices, where should be stored a Bundle documentation?
Answer : Acme/Bundle/DemoBundle/Resources/doc/
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
Answer : https://domain.name/
> http://symfony.com/doc/current/templating.html#linking-to-pages

***

### How can you add an option named my_option without setting a default value?
Answer : 
```php
$resolver->setDefined('my_option');
```
> http://symfony.com/doc/current/components/options_resolver.html#options-without-default-values

***

### What will be the output of the following script?
```php
<?php
$a = array('foo', 'bar' => 'baz', array('foobar', 'baz'));
echo count($a, true);
```
Answer : 5
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
Answer : hello 2
> http://symfony.com/doc/current/cookbook/templating/render_without_controller.html
> 
> https://github.com/symfony/symfony/blob/master/src/Symfony/Bundle/FrameworkBundle/Controller/TemplateController.php#L27-L57
>
> http://php.net/tempnam

***

### What is the way to enable magic __call method?
Answer : 
```php
$accessor = PropertyAccess::createPropertyAccessorBuilder()
    ->enableMagicCall()
    ->getPropertyAccessor()
;
```
> http://symfony.com/doc/current/components/property_access/introduction.html#magic-call-method

***

### Which of these are Standard (not Long Term Support) Versions of Symfony?
Answer : 
- 3.2
- 3.3
- 3.1
- ~~3.4~~ (LTS)
- 3.0

> http://symfony.com/doc/current/contributing/community/releases.html#standard-versions
> 
> http://symfony.com/doc/current/contributing/community/releases.html#long-term-support-versions

***

### What does the 308 HTTP status code stand for?
Answer : Permanent redirect
> https://www.wikiwand.com/fr/Liste_des_codes_HTTP#/Redirection

*** 

### What is returned by $dispatcher->dispatch('bar.event', $event) in the following code?
```php
$event = new OrderPlacedEvent($order);
$dispatcher->dispatch('bar.event', $event);
```
Answer : $event
> http://symfony.com/doc/2.3/components/event_dispatcher/introduction.html#dispatcher-shortcuts

***

### In which cases the following call will return true
```php
$resolver->isDefined('username');
```
Answer : 
- $resolver->setDefined('username');
- $resolver->setRequired('username');
- $resolver->setDefined(array('username'));
- ~~$resolver->setDefault('username');~~

> http://symfony.com/doc/current/components/options_resolver.html#options-without-default-values
> 
> https://github.com/symfony/symfony/blob/master/src/Symfony/Component/OptionsResolver/OptionsResolver.php#L316-L340

***

### Which method must implement a TranslationLoader that implements Symfony\Component\Translation\Loader\LoaderInterface?
Answer : 
```php
public function load($resource, $locale, $domain = 'messages');
```
> http://symfony.com/doc/current/components/translation/custom_formats.html

***

### Can you configure your routes in PHP?
Answer : Yes
> http://symfony.com/doc/current/routing.html#routing-examples

*** 

### What does the affirmative strategy of AccessDecisionManager?
Answer : 
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
Answer : Yes
> http://symfony.com/doc/2.6/book/routing.html#completely-customized-route-matching-with-conditions

***

### Is the translation activated by default?
Answer : No
> http://symfony.com/doc/current/book/translation.html#configuration

***

### How can you disable the validation in a form?
Answer : 
- ~~With the no_validation option set to true~~
- ~~By calling isValid(false)~~
- ~~By not calling isValid()~~
- With the validation_groups option set to false

> http://symfony.com/doc/current/form/disabling_validation.html

***

### Which type does not correspond to a button?
Answer : 
- reset
- button
- ~~input~~
- submit
 
***

### What is the default domain for form label?
Answer : messages
> http://symfony.com/doc/current/reference/forms/types/form.html#translation-domain

***

### Which of theses are not options available in every FormType?
Answer : 
- by_reference
- trim
- compound
- ~~attributes~~
- action
- ~~is_required~~ (required)

> http://symfony.com/doc/current/reference/forms/types/form.html

***

### What are the ways to retrieve the Request in an action?
Answer : 
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
Answer : 
- Validation model
- ~~Confirmation model~~
- Expiration model
- ~~Invalidation model~~

> https://www.w3.org/Protocols/rfc2616/rfc2616-sec13.html

***

### Is it possible to pass a Response instance to the Symfony\Bundle\FrameworkBundle\Controller\Controller::render() method?
Answer : Yes

***

### Is the following code valid?
```php
<?php
class Article
{
    public string $title;
}
```
Answer : No - __Note:__ there is a pending RFC to add this feature to future PHP versions. See details :
> http://php.net/manual/en/language.oop5.properties.php

***

### What will be the last version of Symfony 3?
Answer : 3.4
> http://symfony.com/roadmap?version=3.8#checker

***

### Among the following which ones are escaped?
Answer : 
- {{ var|raw|upper }}
- ~~{{ var|upper|raw }}~~
- {{ var|raw~bar }}

__Note:__ raw must be used before the other filters
> http://twig.sensiolabs.org/doc/filters/raw.html

***

### How can you get the HTTP client user-agent?
Answer : 
```php
$_SERVER['HTTP_USER_AGENT'];
```
> http://php.net/manual/en/reserved.variables.server.php

*** 

### Which of the following are Filesystem methods?
Answer : 
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
Answer : 
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
Answer : 
- ~~0~~
- ~~1~~
- -1

> http://php.net/manual/en/language.operators.comparison.php
> 
> http://stackoverflow.com/questions/30365346/what-is-the-spaceship-operator-in-php-7#answer-30365399

*** 

### What is the first argument of the Symfony\Component\Config\FileLocator::locate method?
Answer : The name of the file to look for.
> http://symfony.com/doc/current/components/config/resources.html#locating-resources

***

### What is the name of the service that check authorization?
Answer : security.authorization_checker
> http://symfony.com/blog/new-in-symfony-2-6-security-component-improvements

***

### Which of theses is the correct way to use the Security annotation to secure a Controller with the ROLE_ADMIN?
Answer : @Security("has_role('ROLE_ADMIN')")
> http://symfony.com/doc/current/bundles/SensioFrameworkExtraBundle/annotations/security.html

***

### With the following code:
```php
use Acme\Person;

$person1 = new Person();
$person1->setName('foo');
$person1->setAge(99);
$person1->setSportsman(false);

$person2 = new Person();
$person2->setName('bar');
$person2->setAge(33);
$person2->setSportsman(true);

$persons = array($person1, $person2);
$data = $serializer->serialize($persons, 'json');
```
### what is the correct way to deserialize the $data into an $persons array of Acme\Person objects?
Answer : 
```php
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Serializer;

$serializer = new Serializer(
    array(new GetSetMethodNormalizer(), new ArrayDenormalizer()),
    array(new JsonEncoder())
);

$persons = $serializer->deserialize($data, 'Acme\Person[]', 'json');
```
> http://symfony.com/doc/3.0/components/serializer.html#handling-arrays

*** 

### What is the default domain for validation message?
Answer : 
- ~~messages~~
- ~~validation~~
- validators
- ~~default~~
- ~~validator~~

> http://symfony.com/doc/current/reference/configuration/framework.html#translation-domain

***

### Which Symfony component is used in the asset Twig function Symfony\Bridge\Twig\Extension\AssetExtension?
Answer : 
- Asset
- ~~Gulp~~
- ~~CssSelector~~
- ~~Assetic~~

> http://symfony.com/doc/current/reference/twig_reference.html#asset
> 
> http://api.symfony.com/3.1/Symfony/Bridge/Twig/Extension/AssetExtension.html

*** 

### What is the command to check the Symfony requirements?
Answer : bin/symfony_requirements
> http://symfony.com/doc/current/deployment.html#a-check-requirements

***

### What is the filename of the template to create a custom 404 error page?
Answer : app/Resources/TwigBundle/views/Exception/error404.html.twig
> http://symfony.com/doc/current/cookbook/controller/error_pages.html

***

### Is the following definition of route correct?
```php
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection->add('blog_show', new Route('/blog/{page}/category/{slug}/{page}', array(
  '_controller' => 'AppBundle:Blog:show',
)));

return $collection;
```
Answer : No - __An exception is thrown__ : Route pattern "/blob/{page}/category/{slug}/{page}" cannot reference variable name "page" more than once.
> https://github.com/symfony/symfony/blob/master/src/Symfony/Component/Routing/RouteCompiler.php#L128

***

### What is the default status code of a Symfony\Component\HttpFoundation\RedirectResponse object?
Answer : 302
> https://www.wikiwand.com/fr/Liste_des_codes_HTTP#/Redirection

***

### What is the correct code to activate the tools to help you debug PHP code?
Answer : 
```php
use Symfony\Component\Debug\Debug;

Debug::enable();
```
> http://symfony.com/doc/current/components/debug/introduction.html#usage

***

### What is the purpose of the logging: true option in the translator config?
Answer : Log a message when Symfony doesn't find a translation for the given locale.
> http://symfony.com/doc/current/reference/configuration/framework.html#logging

*** 

### Is it possible to add a listener to several events?
Answer : Yes
> http://symfony.com/doc/current/components/event_dispatcher/introduction.html#connecting-listeners

***

### What is the way to destroy a variable in a PHP session?
Answer : 
- unset() on the variable in $_SESSION
- ~~session_destroy()~~
- ~~session_unset()~~
- ~~unset() on the variable in $HTTP_SESSION_VARS~~

> http://php.net/manual/en/function.unset.php
> 
> http://php.net/manual/en/function.session-destroy.php
> 
> http://php.net/manual/en/function.session-unset.php
> 
> http://php.net/manual/en/reserved.variables.session.php

***

### How you validate an object but only against a subset of the constraints ?
Answer : Using validation groups.
> http://symfony.com/doc/current/validation/groups.html

***

### Which attributes are reserved special routing parameters?
Answer : 
- _locale
- ~~_type~~
- ~~_response~~
- _format
- _controller

> http://symfony.com/doc/current/routing.html#routing-format-param

***

### When using HTTP basic, how does the server starts the authentication process?
Answer : Sending the WWW-Authenticate HTTP header with the HTTP 401 Not Authorized status code.

*** 

### What will be the output of the following code?
```php
<?php
function foo($y)
{
    return function($x) use ($y) {
        return str_repeat($y, $x);
    };
}
$a = foo(3);
$b = foo(2);
echo $a(2), $b(3);
```
Answer : 33222
> http://php.net/manual/en/functions.anonymous.php

*** 

### With the following code:
```php
<?php
// ...
class Mailer
{
    // ...
    public function configureOptions(OptionsResolver $resolver)
    {
        // ...
        $resolver->setDefault('encryption', null);

        $resolver->setDefault('port', function () {
            if ('ssl' === $options['encryption']) {
                return 465;
            }

            return 25;
        });
    }
}
```
### what would be the resolved $options passed as:
```php
$options = array('encryption' => 'SSL');
```
Answer : 
```php
$options = array(
    'encryption' => 'SSL',
    'port' => function () {
            if ('ssl' === $options['encryption']) {
                return 465;
            }

            return 25;
        },
);
```
> http://symfony.com/doc/current/components/options_resolver.html#default-values-that-depend-on-another-option


