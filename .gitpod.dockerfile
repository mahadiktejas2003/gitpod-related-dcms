# .gitpod.dockerfile

FROM gitpod/workspace-full

# Install PHP and MySQL dependencies
RUN sudo apt-get update && \
    sudo apt-get install -y php mysql-server

# Expose ports for PHP and MySQL
EXPOSE 8080
EXPOSE 3306
