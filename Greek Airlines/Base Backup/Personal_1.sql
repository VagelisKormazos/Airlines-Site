PGDMP                         z        
   Personal_1    14.2    14.2     ?           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            ?           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            ?           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            ?           1262    43614 
   Personal_1    DATABASE     g   CREATE DATABASE "Personal_1" WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE = 'Greek_Greece.1252';
    DROP DATABASE "Personal_1";
                postgres    false            ?            1259    43615    me    TABLE     ?  CREATE TABLE public.me (
    name character varying(30) NOT NULL,
    surname character varying(30),
    address character varying(30),
    email character varying(50),
    password character varying(30),
    country character varying(30),
    zip_code numeric(5,0),
    telephone numeric(10,0),
    card_number numeric(16,0),
    card_type character varying(20),
    gender character varying(6)
);
    DROP TABLE public.me;
       public         heap    postgres    false            ?          0    43615    me 
   TABLE DATA           ?   COPY public.me (name, surname, address, email, password, country, zip_code, telephone, card_number, card_type, gender) FROM stdin;
    public          postgres    false    209   p       \           2606    43619 
   me me_pkey 
   CONSTRAINT     J   ALTER TABLE ONLY public.me
    ADD CONSTRAINT me_pkey PRIMARY KEY (name);
 4   ALTER TABLE ONLY public.me DROP CONSTRAINT me_pkey;
       public            postgres    false    209            ?   ?   x?]?Mj?0F??S????EۅI??Yu38"?,#?Pz??R'?b$?ާy?C*?F?Ҕ>7??/0?a?iw??æO?A!`]?=-?D!?U???V??jc[?-}!8Pp͑?Х???F???e??.i?P?Ķ?w?X]??\?????)??)??C?/W ?0??????++??_JS?/e?b
/.-cy0??K+z?????q?]??xP?CWI?~i??????	?]???M?4?ypo?     