# Ansible Role: Drupal settings

```yaml
drupal_settings:
  - drupal_root: /var/www/web
    sites:
      - name: default
        filename: settings.php # Optional, defaults to 'settings.php'
        settings:
          base_url: https://www.example.com # Optional, Drupal 7
          hash_salt: '' # Optional
          databases:
            default: # The database key
              default: # The database target
                driver: mysql # Optional, defaults to 'mysql'
                host: localhost # Optional, defaults to 'localhost'
                database: mydatabase
                username: user
                password: secret
          config_directories: # Optional, Drupal 8
            sync: path/to/config
          trusted_hosts: # Optional, Drupal 8
            - '^example\.com$'
            - '^.+\.example\.com$'
            - '^example\.org$'
            - '^.+\.example\.org$'
```
