 < ? p h p 
 / * * 
 * 
 *   p l u p l o a d   [ D u t c h ] 
 * 
 *   @ p a c k a g e   l a n g u a g e 
 *   @ c o p y r i g h t   ( c )   2 0 1 0 - 2 0 1 3   M o x i e c o d e   S y s t e m s   A B 
 *   @ c o p y r i g h t   ( c )   2 0 1 2   p h p B B   G r o u p 
 *   @ l i c e n s e   h t t p : / / o p e n s o u r c e . o r g / l i c e n s e s / g p l - 2 . 0 . p h p   G N U   G e n e r a l   P u b l i c   L i c e n s e   v 2 
 * 
 * / 
 
 / * * 
 *   D O   N O T   C H A N G E 
 * / 
 i f   ( ! d e f i n e d ( ' I N _ P H P B B ' ) ) 
 { 
 	 e x i t ; 
 } 
 
 i f   ( e m p t y ( $ l a n g )   | |   ! i s _ a r r a y ( $ l a n g ) ) 
 { 
 	 $ l a n g   =   a r r a y ( ) ; 
 } 
 
 / /   D E V E L O P E R S   P L E A S E   N O T E 
 / / 
 / /   A l l   l a n g u a g e   f i l e s   s h o u l d   u s e   U T F - 8   a s   t h e i r   e n c o d i n g   a n d   t h e   f i l e s   m u s t   n o t   c o n t a i n   a   B O M . 
 / / 
 / /   P l a c e h o l d e r s   c a n   n o w   c o n t a i n   o r d e r   i n f o r m a t i o n ,   e . g .   i n s t e a d   o f 
 / /   ' P a g e   % s   o f   % s '   y o u   c a n   ( a n d   s h o u l d )   w r i t e   ' P a g e   % 1 $ s   o f   % 2 $ s ' ,   t h i s   a l l o w s 
 / /   t r a n s l a t o r s   t o   r e - o r d e r   t h e   o u t p u t   o f   d a t a   w h i l e   e n s u r i n g   i t   r e m a i n s   c o r r e c t 
 / / 
 / /   Y o u   d o   n o t   n e e d   t h i s   w h e r e   s i n g l e   p l a c e h o l d e r s   a r e   u s e d ,   e . g .   ' M e s s a g e   % d '   i s   f i n e 
 / /   e q u a l l y   w h e r e   a   s t r i n g   c o n t a i n s   o n l y   t w o   p l a c e h o l d e r s   w h i c h   a r e   u s e d   t o   w r a p   t e x t 
 / /   i n   a   u r l   y o u   a g a i n   d o   n o t   n e e d   t o   s p e c i f y   a n   o r d e r   e . g . ,   ' C l i c k   % s H E R E % s '   i s   f i n e 
 
 $ l a n g   =   a r r a y _ m e r g e ( $ l a n g ,   a r r a y ( 
 	 ' P L U P L O A D _ A D D _ F I L E S ' 	 	 = >   ' B e s t a n d e n   t o e v o e g e n ' , 
 	 ' P L U P L O A D _ A D D _ F I L E S _ T O _ Q U E U E ' 	 = >   ' B e s t a n d e n   t o e v o e g e n   a a n   d e   w a c h t r i j   e n   k l i k   o p   d e   s t a r t k n o p . ' , 
 	 ' P L U P L O A D _ A L R E A D Y _ Q U E U E D ' 	 = >   ' % s   s t a a t   a l   i n   d e   w a c h t r i j . ' , 
 	 ' P L U P L O A D _ C L O S E ' 	 	 	 = >   ' S l u i t ' , 
 	 ' P L U P L O A D _ D R A G ' 	 	 	 	 = >   ' S l e e p   b e s t a n d e n   h i e r h e e n . ' , 
 	 ' P L U P L O A D _ D U P L I C A T E _ E R R O R ' 	 = >   ' D u b b e l e   b e s t a n d s f o u t . ' , 
 	 ' P L U P L O A D _ D R A G _ T E X T A R E A ' 	 = >   ' J e   k a n   o o k   b e s t a n d e n   t o e v o e g e n   d o o r   z e   n a a r   h e t   t e k s t v a k   t e   s l e p e n . ' , 
 	 ' P L U P L O A D _ E R R _ I N P U T ' 	 	 = >   ' M i s l u k t   o m   i n p u t   s t r e a m   t e   o p e n e n . ' , 
 	 ' P L U P L O A D _ E R R _ M O V E _ U P L O A D E D ' 	 = >   ' M i s l u k t   o m   g e � p l o a d e   b e s t a n d   t e   v e r p l a a t s e n . ' , 
 	 ' P L U P L O A D _ E R R _ O U T P U T ' 	 	 = >   ' M i s l u k t   o m   o u t p u t   s t r e a m   t e   o p e n e n . ' , 
 	 ' P L U P L O A D _ E R R _ F I L E _ T O O _ L A R G E ' 	 = >   ' F o u t :   B e s t a n d   t e   g r o o t : ' , 
 	 ' P L U P L O A D _ E R R _ F I L E _ C O U N T ' 	 = >   ' B e s t a n d s t e l l e r   f o u t . ' , 
 	 ' P L U P L O A D _ E R R _ F I L E _ I N V A L I D _ E X T ' 	 = >   ' F o u t :   O n g e l d i g   b e s t a n d s e x t e n s i e : ' , 
 	 ' P L U P L O A D _ E R R _ R U N T I M E _ M E M O R Y ' 	 = >   ' R u n t i m e   h e e f t   g e e n   g e h e u g e n   m e e r   o v e r . ' , 
 	 ' P L U P L O A D _ E R R _ U P L O A D _ U R L ' 	 = >   ' U p l o a d   U R L   k a n   v e r k e e r d   z i j n   o f   b e s t a a t   n i e t . ' , 
 	 ' P L U P L O A D _ E X T E N S I O N _ E R R O R ' 	 = >   ' B e s t a n d s e x t e n t i e   f o u t . ' , 
 	 ' P L U P L O A D _ F I L E ' 	 	 	 	 = >   ' B e s t a n d :   % s ' , 
 	 ' P L U P L O A D _ F I L E _ D E T A I L S ' 	 	 = >   ' B e s t a n d :   % s ,   g r o o t t e :   % d ,   m a x   b e s t a n d s g r o o t t e :   % d ' , 
 	 ' P L U P L O A D _ F I L E N A M E ' 	 	 	 = >   ' B e s t a n d s n a a m ' , 
 	 ' P L U P L O A D _ F I L E S _ Q U E U E D ' 	 	 = >   ' % d   b e s t a n d e n   i n   w a c h t r i j ' , 
 	 ' P L U P L O A D _ G E N E R I C _ E R R O R ' 	 = >   ' A l g e m e n e   f o u t . ' , 
 	 ' P L U P L O A D _ H T T P _ E R R O R ' 	 	 = >   ' H T T P - f o u t . ' , 
 	 ' P L U P L O A D _ I M A G E _ F O R M A T ' 	 	 = >   ' A f b e e l d i n g s f o r m a a t   v e r k e e r d   o f   w o r d t   n i e t   o n d e r s t e u n d . ' , 
 	 ' P L U P L O A D _ I N I T _ E R R O R ' 	 	 = >   ' I n i t   f o u t . ' , 
 	 ' P L U P L O A D _ I O _ E R R O R ' 	 	 	 = >   ' I O   f o u t . ' , 
 	 ' P L U P L O A D _ N O T _ A P P L I C A B L E ' 	 = >   ' N / B ' , 
 	 ' P L U P L O A D _ S E C U R I T Y _ E R R O R ' 	 = >   ' B e v e i l i g i n g s f o u t . ' , 
 	 ' P L U P L O A D _ S E L E C T _ F I L E S ' 	 	 = >   ' S e l e c t e e r   b e s t a n d e n ' , 
 	 ' P L U P L O A D _ S I Z E ' 	 	 	 	 = >   ' G r o o t t e ' , 
 	 ' P L U P L O A D _ S I Z E _ E R R O R ' 	 	 = >   ' B e s t a n d s g r o o t t e   f o u t . ' , 
 	 ' P L U P L O A D _ S T A T U S ' 	 	 	 = >   ' S t a t u s ' , 
 	 ' P L U P L O A D _ S T A R T _ U P L O A D ' 	 	 = >   ' S t a r t   u p l o a d ' , 
 	 ' P L U P L O A D _ S T A R T _ C U R R E N T _ U P L O A D ' 	 = >   ' S t a r t   w a c h t r i j   u p l o a d e n ' , 
 	 ' P L U P L O A D _ S T O P _ U P L O A D ' 	 	 = >   ' S t o p   u p l o a d ' , 
 	 ' P L U P L O A D _ S T O P _ C U R R E N T _ U P L O A D ' 	 = >   ' S t o p   b e s t a a n d e   u p l o a d ' , 
 	 / /   N o t e :   T h i s   s t r i n g   i s   f o r m a t t e d   i n d e p e n d e n t l y   b y   p l u p l o a d   a n d   s o   d o e s   n o t 
 	 / /   u s e   t h e   s a m e   f o r m a t t i n g   r u l e s   a s   n o r m a l   p h p B B   t r a n s l a t i o n   s t r i n g s 
 	 ' P L U P L O A D _ U P L O A D E D ' 	 	 	 = >   ' % d / % d   b e s t a n d e n   g e � p l o a d ' , 
 ) ) ; 
