# Dransible

## Prerequisites

- [Ansible][ansible]
- [Vagrant][vagrant]
- Recommended: [Vagrant::Hostsupdater plugin][hostsupdater]

[ansible]: https://www.ansible.com
[hostsupdater]: https://github.com/cogitatio/vagrant-hostsupdater
[vagrant]: https://www.vagrantup.com

## Installation

1. Download roles from Galaxy:

    ```bash
    ansible-galaxy install -r tools/ansible/requirements.yml
    ```

1. Start the server:

    ```bash
    vagrant up
    ```

1. Provision the server:

    ```bash
    ansible-playbook tools/ansible/provision.yml
    ```

1. Deploy the application:

    ```bash
    ansible-playbook tools/ansible/deploy.yml
    ```
