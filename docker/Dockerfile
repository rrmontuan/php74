FROM devilbox/nginx-stable

COPY ./nginx.conf /etc/nginx/nginx.conf

COPY ./entrypoint.sh /etc/entrypoint.sh
RUN chmod +x /etc/entrypoint.sh
CMD ["nginx", "-g", "daemon off;"]
ENTRYPOINT ["/etc/entrypoint.sh"]