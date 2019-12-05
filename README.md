# Dransible

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
