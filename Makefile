.PHONY: _list

_list:
	@echo "Type make then a space then hit tab to see available commands"

build:
	docker-compose --project-name=testsamlidp_idp build

up:
	docker-compose --project-name=testsamlidp_idp up --build

upd:
	docker-compose --project-name=testsamlidp_idp up --build -d

stop:
	docker-compose --project-name=testsamlidp_idp stop

rm:
	docker-compose --project-name=testsamlidp_idp rm

shell:
	docker exec -t -i testsamlidp_idp bash
