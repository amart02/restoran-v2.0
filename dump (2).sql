--
-- PostgreSQL database dump
--

-- Dumped from database version 10.22
-- Dumped by pg_dump version 10.22

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

--
-- Data for Name: type_of_dish; Type: TABLE DATA; Schema: public; Owner: postgres
--

create table if not exists public.type_of_dish
(
    type_of_dish_id integer      not null
        primary key,
    type_name       varchar(100) not null
);

create table if not exists public.menu
(
    menu_id         integer      not null
        primary key,
    org_name        varchar(100) not null,
    structure       varchar(300) not null,
    price           text         not null,
    weight          text         not null,
    type_of_dish_id integer
        constraint fk_menu_type_of_dish
            references public.type_of_dish,
    image           varchar(500)
);


INSERT INTO public.type_of_dish VALUES (1, 'Салаты');
INSERT INTO public.type_of_dish VALUES (2, 'Супы');
INSERT INTO public.type_of_dish VALUES (3, 'Горячее');
INSERT INTO public.type_of_dish VALUES (4, 'Гарниры');
INSERT INTO public.type_of_dish VALUES (5, 'Десерты');
INSERT INTO public.type_of_dish VALUES (6, 'Напитки');


--
-- Data for Name: menu; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.menu VALUES (1, 'Зеленый салат с креветками и вялеными томатами', 'Микс из листовых салатов, свежего шпината, огурцов в сочетании с вялеными томатами, креветками, тыквенными семечками под заправкой в восточном стиле.', '590р.', '130/30г.', 1, 'img\salat3.jpg');
INSERT INTO public.menu VALUES (2, 'Салат с тунцом и яйцом пашот', 'Тунец с яйцом пашот, шпинатом, томатами, корнишонами и миникартофелем с зеленой фасолью, перцем-гриль, каперсами и маслинами в фирменной заправке.', '390р.', '170г.', 1, 'img\salat2.jpg');
INSERT INTO public.menu VALUES (3, 'Салат из печеной свеклы со страчателлой', 'Запеченная свекла со страчателлой, свежим шпинатом, апельсином и яблоком с брусничным соусом.', '430р.', '250г.', 1, 'img\salat1.jpg');
INSERT INTO public.menu VALUES (8, 'Томленая утиная грудка с картофелем', 'Томленая утиная грудка с мятым картофелем и шпинатом с фирменным соусом.', '750р.', '285г.', 3, 'img\tomlutin.jpg');
INSERT INTO public.menu VALUES (5, 'Том Ям', '«Том ям» с креветками и треской, томатами, жареными шампиньонами и лаймом. Подается с тайским жасминовым рисом.', '690р.', '270/100/15г.', 2, 'img\tomyam.jpg');
INSERT INTO public.menu VALUES (17, 'Яблочный сок', 'Собственного приготовления.', '220р.', '500мл.', 6, 'img\Apple-juice.png');
INSERT INTO public.menu VALUES (6, 'Суп куриный с феттучини и шампиньонами', 'Куриный бульон с фетучини, куриным филе и обжаренными шампиньонами, с добавлением моркови, сельдерея и отварного яйца.', '370р.', '440г.', 2, 'img\Суп-лапша-с-курицей_693х559.jpg');
INSERT INTO public.menu VALUES (16, 'Компот вишневый', 'Собственного приготовления.', '220р.', '500мл.', 6, 'img\Kompot-Vishnevyy.png');
INSERT INTO public.menu VALUES (7, 'Телячья печень с картофельным пюре', 'Обжаренная телячья печень с репчатым луком. Подается с картофельным пюре, малосольными огурцами и томатами черри. Украшают зеленью.', '590р.', '220/150/50г.', 3, 'img\6_693х559.jpg');
INSERT INTO public.menu VALUES (4, 'Суп с телятиной и картофелем', 'Мясной бульон с обжаренной телятиной и отварным картофелем. Подается с кинзой, петрушкой и чесноком.', '470р.', '460/20г.', 2, 'img\supstelyat.jpg');
INSERT INTO public.menu VALUES (10, 'Картофель обжаренный с чесноком', 'Обжаренный картофель с чесноком.', '180р.', '170г.', 4, 'img\15_693х559.jpg');
INSERT INTO public.menu VALUES (13, 'Пассион Манго-Маракуйя', 'Вкусный тропический десерт.', '330р.', '125г.', 5, 'img\16_693х559.jpg');
INSERT INTO public.menu VALUES (9, 'Кальмары на гриле', 'Кальмары, подрумяненные на гриле. Подаются с обжаренным мини картофелем, фасолью, болгарским перцем и томатами черри.', '650р.', '220/50г.', 3, 'img\8_693х559.jpg');
INSERT INTO public.menu VALUES (11, 'Картофельное пюре', 'Нежное картофельное пюре.', '190р.', '250г.', 4, 'img\pure.jpg');
INSERT INTO public.menu VALUES (12, 'Рис жасминовый', 'Отварной рис Жасмин, кунжут.', '180р.', '150г.', 4, 'img\ris.jpg');
INSERT INTO public.menu VALUES (14, 'Пирог Яблочный без мороженого', 'Домашний пирог из слоеного теста и свежих яблок без мороженого', '330р.', '160/50г.', 5, 'img\foto9_693x559.jpg');
INSERT INTO public.menu VALUES (15, 'Медовик', 'Коржи из теста с медом, пропитанные кремом со сгущенным молоком.', '330р.', '170г.', 5, 'img\Medovik.png');
INSERT INTO public.menu VALUES (18, 'Апельсиновый сок', 'Собственного приготовления.', '220р.', '500мл.', 6, 'img\Orange-juice.png');


--
-- PostgreSQL database dump complete
--

