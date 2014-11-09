# Elasticsearch for Magento

A Magento module to use Elasticsearch as Flat Table Replacement for catalog and search.

Please consider this a minimal working beta version. Currently supports indexing and searching of simple products.

## Installation

Use [modman](https://github.com/colinmollenhour/modman) to install the extension:
```
modman clone https://github.com/magento-hackathon/Elasticgento.git
modman clone https://github.com/magento-hackathon/Magento-PSR-0-Autoloader.git
```

Edit your app/etc/local.xml file to initialize the Elastica namespace, insert following code in the `<global/>`-node

```
<psr0_namespaces>
    <Elastica />
</psr0_namespaces>
```

Configure the elasticsearch server in the Magento Backend in `System` -> `Configuration` -> `Elasticgento`
