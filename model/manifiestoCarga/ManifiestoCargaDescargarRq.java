/**
 * 
 */
package org.sieca.everis.pdcc.model.manifiestoCarga;

import org.sieca.everis.pdcc.model.transbordoMercancia.Manifiesto;
import org.sieca.everis.pdcc.model.util.RequestBody;

/**
 * @author ytorregl
 *
 */
public class ManifiestoCargaDescargarRq extends RequestBody{
	
    private Duca duca;
    private Manifiesto manifiesto;
	/**
	 * 
	 */
	public ManifiestoCargaDescargarRq() {
		super();
		// TODO Auto-generated constructor stub
	}
	/**
	 * @return the duca
	 */
	public Duca getDuca() {
		return duca;
	}
	/**
	 * @param duca the duca to set
	 */
	public void setDuca(Duca duca) {
		this.duca = duca;
	}
	/**
	 * @return the manifiesto
	 */
	public Manifiesto getManifiesto() {
		return manifiesto;
	}
	/**
	 * @param manifiesto the manifiesto to set
	 */
	public void setManifiesto(Manifiesto manifiesto) {
		this.manifiesto = manifiesto;
	}
    
    

}
