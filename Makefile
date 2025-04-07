IMAGE_NAME=mhwilds-sdk-image
CONTAINER_NAME=mhwilds-dev
APP_VOLUME=$(shell pwd):/app

build-image:
	docker build -t $(IMAGE_NAME) .

build-container:
	docker create --name $(CONTAINER_NAME) -v "$(APP_VOLUME)" $(IMAGE_NAME)

start:
	docker start $(CONTAINER_NAME)

stop:
	docker stop $(CONTAINER_NAME)

remove-container:
	docker rm $(CONTAINER_NAME)

remove-image:
	docker rmi $(IMAGE_NAME)

shell:
	docker exec -it $(CONTAINER_NAME) bash

.PHONY: build-image build-container start stop remove-container remove-image shell
